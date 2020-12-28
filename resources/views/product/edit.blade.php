@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="" method="POST" >
        @csrf
      
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="" class="form-control" placeholder="Name"style="width:40%;">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantité</strong>
                    <input type="text" name="qte" value="" class="form-control" placeholder="qte" style="width:40%;">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Initial Price : </strong>
                    <input type="number" name="initial_price" class="form-control" placeholder=""
                        value="" style="width:40%;">
                </div>
            </div>
            
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Region : </strong>
                    <input type="text" name="region" class="form-control" placeholder=""
                        value=""style="width:40%;">
                </div>
            </div>
            
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adresse : </strong>
                    <input type="text" name="adress" class="form-control" placeholder=""
                        value=""style="width:40%;">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Livrable: </strong>
                    <input type="radio" style="width=10% ; height=10% ;" name="livrable" 
                        value="1" > YES
                        <input type="radio"  name="livrable" style="width=10% ; height=10% ;"
                        value="0" >NO
                </div>
            </div>
            

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Region : </strong>
                    <input type="text" name="sub_category_id" class="form-control" placeholder=""
                        value=""style="width:40%;">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group" style="width:40%;">
                    <strong>Sub Category : </strong>
                    <select id="sub_category_id">
                    @foreach($sub_categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    </select>
                </div>
            </div>


            
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>
@endsection