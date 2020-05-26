@extends('layouts.app')

@section('content')

<!-- Div App relacionado con el archivo js -->
<div id="app_AdminJobs">
    <div id="componente1">
      <!-- Componente que es donde esta el Nav-->
    </div> 
     <!-- Buscador-->
    
        <el-form>
      <el-form-item>
        <el-col :span="10" style="margin-left: 3%">
          <el-input placeholder="Buscar un trabajo" prefix-icon="el-icon-search" id="search" name="search"  v-model="buscador"></el-input> 
        </el-col>
        <el-col :span="6" style="margin-left: 2%">
          <el-button type="primary" icon="el-icon-search"></el-button>
        </el-col>
        <el-col :span="3" style="margin-left: 2%; position: absolute; right: 10px">
          <el-button type="primary" icon="el-icon-edit">Crear empleo</el-button>        
       </el-col>
      </el-form-item>
    </el-form>
        
        
      
       <!-- Tabla -->
    <div id="div6">
    <table class="table table-striped">
  <thead class="thead-primary">
    <tr >
      <th scope="col">Compañia</th>
      <th scope="col">Posicion</th>
      <th scope="col">Ubicacion</th>
      <th scope="col">Acciones</th>
    
    </tr>
  </thead>
  <tbody id="tbodyadmin">
  <tr id="tradmin"></tr>
    
  </tbody>
</table>

    </div>
    <div style="text-align: center">
      <el-button  type="primary"  name="vermas"   id="vermas"  style="margin: auto; text-align: center">Mostrar Mas<i class="el-icon-view"></i></el-button> 
    </div>
    
         <!-- Buttom de Post a Job-->
    
    </div>


@endsection