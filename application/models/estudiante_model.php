<?php

    class Estudiante_model extends CI_Model{
        public function listaestudiantes()
        {
            $this->db->select('*');
            $this->db->from('estudiante');
            $this->db->where('habilitado','1');
            return $this->db->get();
        }

        public function agregarestudiante($data)
        {
            $this->db->insert('estudiante',$data);
        }

        public function eliminarestudiante($idestudiante) //este es un hard delete
        {
            $this->db->where('idEstudiante',$idestudiante);
            $this->db->delete('estudiante');
        }

        public function recuperarestudiante($idestudiante)
        {
            $this->db->select('*');
            $this->db->from('estudiante');
            $this->db->where('idEstudiante',$idestudiante);
            return $this->db->get();
        }

        public function modificarestudiante($idestudiante,$data)
        {
            $this->db->where('idEstudiante',$idestudiante);
            $this->db->update('estudiante',$data);
        }

        public function listaestudiantesdes()
        {
            $this->db->select('*');
            $this->db->from('estudiante');
            $this->db->where('habilitado','0');
            return $this->db->get();
        }
    }