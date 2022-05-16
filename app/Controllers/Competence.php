<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CompetenceModel;
use App\Models\CvModel;

class Competence extends BaseController
{
	public function __construct()
	{
		$this->model = new CompetenceModel();
		$this->pager = service('pager');
	}

	public function add_skills()
	{
		if ($this->request->getMethod() == 'post') {
			$skills = $this->request->getVar('skills');
			$resume = (new CvModel())->user_cv(session('id'));
			$data = [];

			foreach ($skills as $skill) {
				$data[] = [
					'idCV'   => $resume,
					'idCompetence'   => $skill
				];
			}

			if ($this->model->add_skills($data)) {
				echo json_encode(array("status" => TRUE, "message" => "Competences ajoutées"));
			} else {
				echo json_encode(array("status" => false, "message" => "Failed"));
			}
		}
	}

	public function competences()
	{

		$data = [];

		$competence = $this->request->getVar('competence');

		$this->page = (int)(($this->request->getVar('page') !== null) ? $this->request->getVar('page') : 1) - 1;
		$offset =  PER_PAGE * $this->page;

		$competences = $this->model->get_liste_competence($competence, PER_PAGE, $offset);
		$total = count($this->model->get_liste_competence());
		$this->pager->makeLinks($this->page, PER_PAGE, $total);
		$data['pager'] = $this->pager;
		$data['competences'] = $competences;


		$this->charger('formations/competences', $data);
	}


	public function admin_competences()
	{

		$data = [];

		$data['competences'] = $this->model->get_liste_competence();
		$this->adminPage('admin/elements/competences', $data);
	}

	public function delete_competence($id)
	{
		helper(['form', 'url']);

		if ($this->model->delete_competence($id))
			echo json_encode(array("status" => TRUE, "message" => "Suppression validée"));
		else
			echo json_encode(array("status" => false, "message" => "Echec Suppression"));
	}


	public function ajax_get_competence($id)
	{
		$data = (new CompetenceModel())->get_by_id($id);
		echo json_encode($data);
	}



	protected function getCompetenceFormData()
	{
		$data = array(
			'idCompetence' =>  $this->request->getVar('id'),
			'intitule' => $this->request->getVar('intitule'),

		);


		return $data;
	}

	public function edit_competence()
	{
		helper(['form', 'url']);

		$data = array(
			'intitule' => $this->request->getVar('intitule'),
		);

		if ($this->model->update_competence(array('idCompetence' => $this->request->getVar('idCompetence')), $data))
			echo json_encode(array("status" => TRUE, "message" => "Competence modifiée"));
		else
			echo json_encode(array("status" => false, "message" => "Failed to update"));
	}


	public function add_competence()
	{
		helper('form', 'url');

		$data = array(
			'intitule' => $this->request->getVar('intitule'),


		);

		if ($this->model->add_competence($data)) {
			echo json_encode(array("status" => TRUE, "message" => "Competence ajoutée"));
		} else {
			echo json_encode(array("status" => false, "message" => "Failed"));
		}
	}
}