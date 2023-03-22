<?php 

class ClassSchedule {
    private $id;
    private $professorId;
    private $courseName;
    private $startTime;
    private $endTime;
    private $createdAt;
    private $updatedAt;

    public function __construct($id, $professorId, $courseName, $startTime, $endTime, $createdAt, $updatedAt) {
        $this->id = $id;
        $this->professorId = $professorId;
        $this->courseName = $courseName;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function getId() {
        return $this->id;
    }

    public function getProfessorId() {
        return $this->professorId;
    }

    public function setProfessorId($professorId) {
        $this->professorId = $professorId;
    }

    public function getCourseName() {
        return $this->courseName;
    }

    public function setCourseName($courseName) {
        $this->courseName = $courseName;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime($startTime) {
        $this->startTime = $startTime;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime($endTime) {
        $this->endTime = $endTime;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}


?>