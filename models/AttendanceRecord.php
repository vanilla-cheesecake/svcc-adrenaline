<?php

class AttendanceRecord {
    private $id;
    private $classScheduleId;
    private $professorId;
    private $attendanceTime;
    private $ipAddress;
    private $location;
    private $createdAt;
    private $updatedAt;

    public function __construct($id, $classScheduleId, $professorId, $attendanceTime, $ipAddress, $location, $createdAt, $updatedAt) {
        $this->id = $id;
        $this->classScheduleId = $classScheduleId;
        $this->professorId = $professorId;
        $this->attendanceTime = $attendanceTime;
        $this->ipAddress = $ipAddress;
        $this->location = $location;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function getId() {
        return $this->id;
    }

    public function getClassScheduleId() {
        return $this->classScheduleId;
    }

    public function setClassScheduleId($classScheduleId) {
        $this->classScheduleId = $classScheduleId;
    }

    public function getProfessorId() {
        return $this->professorId;
    }

    public function setProfessorId($professorId) {
        $this->professorId = $professorId;
    }

    public function getAttendanceTime() {
        return $this->attendanceTime;
    }

    public function setAttendanceTime($attendanceTime) {
        $this->attendanceTime = $attendanceTime;
    }

    public function getIpAddress() {
        return $this->ipAddress;
    }

    public function setIpAddress($ipAddress) {
        $this->ipAddress = $ipAddress;
    }

    public function getLocation() {
        return $this->location;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}



?>