<?php


class Database{
	
	private $db_host = "localhost";  
	private $db_user = "root";  
	private $db_pass = "";  
	private $db_name = "data";	
	
	
	
	private $con = false; 
	private $result = array(); 
    private $myQuery = "";
    private $numResults = "";
	
	public function connect(){
		if(!$this->con){
			
			$myconn = @mysql_connect($this->db_host,$this->db_user,$this->db_pass);  
            
			if($myconn){
            	$seldb = @mysql_select_db($this->db_name,$myconn); 
                if($seldb){
                	$this->con = true;
                    return true; 
                }else{
                	array_push($this->result,mysql_error()); 
                    return false;  
                }  
            }else{
            	array_push($this->result,mysql_error());
                return false; 
            }  
        }else{  
            return true; 
        }  	
	}
	
	
    public function disconnect(){
    	
    	if($this->con){
    		if(@mysql_close()){
    			$this->con = false;
				return true;
			}else{
				return false;
			}
		}
    }
	
	
	
	public function select($table, $rows = '*', $join = null, $where = null, $order = null, $limit = null){
		$q = 'SELECT '.$rows.' FROM '.$table;
		if($join != null){
			$q .= ' JOIN '.$join;
		}
        if($where != null){
        	$q .= ' WHERE '.$where;
		}
        if($order != null){
            $q .= ' ORDER BY '.$order;
		}
        if($limit != null){
            $q .= ' LIMIT '.$limit;
        }
        $this->myQuery = $q; 
        if($this->tableExists($table)){
        	$query = @mysql_query($q);
			if($query){
				$this->numResults = mysql_num_rows($query);
				for($i = 0; $i < $this->numResults; $i++){
					$r = mysql_fetch_array($query);
                	$key = array_keys($r);
                	for($x = 0; $x < count($key); $x++){
                    	if(!is_int($key[$x])){
                    		if(mysql_num_rows($query) >= 1){
                    			$this->result[$i][$key[$x]] = $r[$key[$x]];
							}else{
								$this->result = null;
							}
						}
					}
				}
				return true; 
			}else{
				array_push($this->result,mysql_error());
				return false; 
			}
      	}else{
      		return false; 
    	}
    }
	
    public function insert($table,$params=array()){
    	 if($this->tableExists($table)){
    	 	$sql='INSERT INTO `'.$table.'` (`'.implode('`, `',array_keys($params)).'`) VALUES ("' . implode('", "', $params) . '")';
            $this->myQuery = $sql; 
            if($ins = @mysql_query($sql)){
            	array_push($this->result,mysql_insert_id());
                return true; 
            }else{
            	array_push($this->result,mysql_error());
                return false; 
            }
        }else{
        	return false; 
        }
    }
	
    public function delete($table,$where = null){
    	 if($this->tableExists($table)){
    	 	if($where == null){
                $delete = 'DROP TABLE '.$table; 
            }else{
                $delete = 'DELETE FROM '.$table.' WHERE '.$where; 
            }
           
            if($del = @mysql_query($delete)){
            	array_push($this->result,mysql_affected_rows());
                $this->myQuery = $delete; 
                return true; 
            }else{
            	array_push($this->result,mysql_error());
               	return false; 
            }
        }else{
            return false;
        }
    }
	
    public function update($table,$params=array(),$where){
    	
    	if($this->tableExists($table)){
            $args=array();
			foreach($params as $field=>$value){
				$args[]=$field.'="'.$value.'"';
			}
			$sql='UPDATE '.$table.' SET '.implode(',',$args).' WHERE '.$where;
            $this->myQuery = $sql; 
            if($query = @mysql_query($sql)){
            	array_push($this->result,mysql_affected_rows());
            	return true; 
            }else{
            	array_push($this->result,mysql_error());
                return false; 
            }
        }else{
            return false; 
        }
    }
	
	private function tableExists($table){
		$tablesInDb = @mysql_query('SHOW TABLES FROM '.$this->db_name.' LIKE "'.$table.'"');
        if($tablesInDb){
        	if(mysql_num_rows($tablesInDb)==1){
                return true; 
            }else{
            	array_push($this->result,$table." does not exist in this database");
                return false; 
            }
        }
    }
	
    public function getResult(){
        $val = $this->result;
        $this->result = array();
        return $val;
    }

    public function getSql(){
        $val = $this->myQuery;
        $this->myQuery = array();
        return $val;
    }

    //Pass the number of rows back
    public function numRows(){
        $val = $this->numResults;
        $this->numResults = array();
        return $val;
    }

    // Escape your string
    public function escapeString($data){
        return mysql_real_escape_string($data);
    }
} 
