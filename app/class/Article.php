<?php

class Article extends Table {
	protected $id,
			  $title,
			  $content,
			  $thumb_type;

	public function id() { return $this->id; }
	public function title() { return $this->title; }
	public function content() { return htmlspecialchars_decode($this->content); }
	public function thumb_type() { return $this->thumb_type; }

	public function getSlug() {
		$slug = System::slugify($this->title());
		$slug .= '-'.$this->id;
		return $slug;
	}

	public function getThumbPath() {
		return '/public/img/articles/'.$this->id().'.'.System::getImageFormatStr($this->thumb_type());
	}

	public function getSnippet() {
		$chars = 200;
		$text = strip_tags($this->content());

	    $text = $text." ";
	    $text = substr($text,0,$chars);
	    $text = substr($text,0,strrpos($text,' '));
	    $text = $text."...";

		return $text;
	}

	public function setId($id) {
		$this->id = $id;
	}
	public function setTitle($title) {
		$this->title = $title;
	}
	public function setContent($content) {
		$this->content = $content;
	}
	public function setThumb_type($thumb_type) {
		$this->thumb_type = $thumb_type;
	}
}