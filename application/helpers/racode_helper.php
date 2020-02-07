<?php


function cmb_dinamis($name,$table,$field,$pk,$selected=null,$order=null){
    $ci = get_instance();
    $cmb = "<select name='$name' class='form-control'>";
    if($order){
        $ci->db->order_by($field,$order);
    }
    $data = $ci->db->get($table)->result();
    foreach ($data as $d){
        $cmb .="<option value='".$d->$pk."'";
        $cmb .= $selected==$d->$pk?" selected='selected'":'';
        $cmb .=">".  strtoupper($d->$field)."</option>";
    }
    $cmb .="</select>";
    return $cmb;
}

function select2_dinamis($name,$table,$field,$field1,$placeholder){
    $ci = get_instance();
    $select2 = '<select name="'.$name.'" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="'.$placeholder.'" style="width: 100%;" tabindex="-1" aria-hidden="true">';
    $data = $ci->db->get($table)->result();

    foreach ($data as $row){
        $select2.= '<option>'.$row->$field.''.$row->$field1.'</option>' ;

    }
    $select2 .='</select>';


    return $select2;
}

function select_dinamis($name,$table,$field,$placeholder){
    $ci = get_instance();
    $select2 = '<select name="'.$name.'" class="form-control "  data-placeholder="'.$placeholder.'" style="width: 100%;" tabindex="-1" aria-hidden="true">';
    $data = $ci->db->get($table)->result();
    $data_kar = $ci->db->get('data_karyawan')->result();

    foreach ($data as $row):
      $id_jab = $row->id_jabatan;
      $checked = null;
        foreach ($data_kar as  $value) {
          // code...
          if ($id_jab == $value->id_jabatan) {
            // code...
            $checked ='selected';
            break;
          }
        }
        $select2.= '<option '.$checked.' value="'.$row->id_jabatan.'">'.$row->$field.'</option> ' ;
     endforeach;
    $select2 .='</select>';

    // <select class="form-control" name="caBrands" style="width:300px;">
    //  <option selected value="BMW">BMW</option>
    //  <option value="Toyota">Toyota</option>
    //  <option value="Mitsubishi">Mitsubishi</option>
    // </select>
    return $select2;
}


function datalist_dinamis($name,$table,$field,$value=null){
    $ci = get_instance();
    $string = '<input value="'.$value.'" name="'.$name.'" list="'.$name.'" class="form-control">
    <datalist id="'.$name.'">';

    $data = $ci->db->get($table)->result();
    foreach ($data as $row){
         $string = '<option value="audi" selected>Audi</option>';

        $string.='<option value="'.$row->$field.'">';
          // $string = '<input value="'.$row->id_jabatan.'" name="id_jabatan"  class="form-control">';

           $data_id_jabatan = $row->id_jabatan;

    }
    $string .='</datalist>';
      // $string = '<input value="'.$data_id_jabatan.'" name="id_jabatan"  class="form-control">';

    return $string;
}
function datalist_dinamis_array($name,$table,$field,$value=null){
    $ci = get_instance();
    $string = '<input value="'.$value.'" name="'.$name.'" list="'.$name.'" class="form-control"> <datalist id="'.$name.'">';
    $data = $ci->db->get($table)->result();
    foreach ($data as $row){
        $string.='<option value="'.$row->$field.' '.set_id_jabatan($row->id_jabatan).'">';


            $data_id_jabatan = $row->id_jabatan;

    }
    $string .='</datalist>';
      // $string = '<input value="'.$data_id_jabatan.'" name="id_jabatan"  class="form-control">';
  $string1 = '<input value="'.$data_id_jabatan.'" name="id"  class="form-control">';
    return array($string, $string1 );
}

function set_id_jabatan($id_jabatan='')
{
  echo "$id_jabatan";
}

function rename_string_is_aktif($string){
        return $string=='y'?'Aktif':'Tidak Aktif';
    }


function is_login(){
    $ci = get_instance();
    if(!$ci->session->userdata('id_users')){
        redirect('auth');
    }else{
        $modul = $ci->uri->segment(1);

        $id_user_level = $ci->session->userdata('id_user_level');
        // dapatkan id menu berdasarkan nama controller
        $menu = $ci->db->get_where('tbl_menu',array('url'=>$modul))->row_array();
        $id_menu = $menu['id_menu'];
        // chek apakah user ini boleh mengakses modul ini
        $hak_akses = $ci->db->get_where('tbl_hak_akses',array('id_menu'=>$id_menu,'id_user_level'=>$id_user_level));
        if($hak_akses->num_rows()<1){
            redirect('blokir');
            exit;
        }
    }
}

function alert($class,$title,$description){
    return '<div class="alert '.$class.' alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> '.$title.'</h4>
                '.$description.'
              </div>';
}

// untuk chek akses level pada modul peberian akses
function checked_akses($id_user_level,$id_menu){
    $ci = get_instance();
    $ci->db->where('id_user_level',$id_user_level);
    $ci->db->where('id_menu',$id_menu);
    $data = $ci->db->get('tbl_hak_akses');
    if($data->num_rows()>0){
        return "checked='checked'";
    }
}


function autocomplate_json($table,$field){
    $ci = get_instance();
    $ci->db->like($field, $_GET['term']);
    $ci->db->select($field);
    $collections = $ci->db->get($table)->result();
    foreach ($collections as $collection) {
        $return_arr[] = $collection->$field;
    }
    echo json_encode($return_arr);
}
