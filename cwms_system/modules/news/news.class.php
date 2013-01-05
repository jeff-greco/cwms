<?php

	//NEWS CLASS OBJECT
	
	require_once(ROOT_PATH."/includes/dbconnect.php");
	class NotFoundException extends Exception {}
	
	class News {
		private $id;
		private $title;
		private $story;
		private $slug;
		private $author;
		private $album;
		private $published;
		private $type;
		private $commenting;
		private $image;
		private $categories;
		private $date_created;
		private $date_published;
		private $date_modified;
		
		public function get_id(){
		    return $id;
		}
		public function get_title(){
		    return $title;
		}
		public function get_story(){
		    return $story;
		}
		public function get_slug(){
		    return $slug;
		}
		public function get_author(){
		    return $author;
		}
		public function get_album(){
		    return $album;
		}
		public function get_published(){
		    return $published;
		}
		public function get_type(){
		    return $type;
		}
		public function get_commenting(){
		    return $commenting;
		}
		public function get_image(){
		    return $image;
		}
		public function get_categories(){
		    return $categories;
		}
		public function get_date_created(){
		    return $date_created;
		}
		public function get_date_published(){
		    return $date_published;
		}
		public function get_date_modified(){
		    return $date_modified;
		}
		public function set_id($value){
		    $this->id = $value;
		}
		public function set_title($value){
		    $this->title = $value;
		}
		public function set_story($value){
		    $this->story = $value;
		}
		public function set_slug($value){
		    $this->slug = $value;
		}
		public function set_author($value){
		    $this->author = $value;
		}
		public function set_album($value){
		    $this->album = $value;
		}
		public function set_published($value){
		    $this->published = $value;
		}
		public function set_type($value){
		    $this->type = $value;
		}
		public function set_commenting($value){
		    $this->commenting = $value;
		}
		public function set_image($value){
		    $this->image = $value;
		}
		public function set_categories($value){
		    $this->categories = $value;
		}
		public function set_date_created($value){
		    $this->date_created = $value;
		}
		public function set_date_published($value){
		    $this->date_published = $value;
		}
		public function set_date_modified($value){
		    $this->date_modified = $value;
		}


		
	}
	
	
?>