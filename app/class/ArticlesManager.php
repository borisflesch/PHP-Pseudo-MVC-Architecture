<?php

class ArticlesManager extends Manager {

	/**
	 * Récupère tous les articles de la bdd
	 * @return [type] [description]
	 */
	public function getAll($page = false) {
		// AJOUTER la pagination
		$q = $this->db->query('SELECT * FROM articles ORDER BY dtpost DESC');
		$q->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Article');
		return $q->fetchAll();
	}

	/**
	 * Récupère un article en fonction de son id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function get($id) {
		$q = $this->db->prepare('SELECT * FROM articles WHERE id = :id');
		$q->bindValue(':id', $id);
		$q->execute();

		if($q->rowCount()) {
			return new Article($q->fetch(PDO::FETCH_ASSOC));
		}
		return false;
	}

	/**
	 * Vérifie l'existence d'un article en fonction de son id et de sa key (clé d'URL <=> slug passé en paramètre)
	 * @param  [type] $id  [description]
	 * @param  [type] $key [description]
	 * @return [type]      [description]
	 */
	public function articleExists($id, $key) {
		$q = $this->db->prepare('SELECT titre FROM articles WHERE id = :id');
		$q->bindValue(':id', $id);
		$q->execute();

		$titre = $q->fetchColumn();
		$slug = System::slugify($titre);

		if ($slug == $key) {
			return true;
		}
		return false;
	}

	/**
	 * Insert un article dans la base de données
	 * @param Livre $livre [description]
	 */
	public function add(Article $article) {
		$q = $this->db->prepare('INSERT INTO articles (titre, contenu, dtpost, format_miniature) VALUES (:titre, :contenu, NOW(), :format_miniature)');
		$q->bindValue(':titre', $article->titre());
		$q->bindValue(':contenu', $article->contenu());
		$q->bindValue(':format_miniature', $article->format_miniature());
		$res = $q->execute();

		return $res;
	}

}