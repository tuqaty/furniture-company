
<style>

    body
    {
        background-color: #9EFAB2;
    }
    input[type=text]
    {
        border-color: #D3C442;
        background-color: #FFFDC0;
        width:70%;
        height:50px;
    }
    input[type=number]
    {
        border-color: #D3C442;
        background-color: #FFFDC0;
        width:10%;
        height:50px;
    }
    .card-header
    {
        margin-left: 450px ;
        font-size: large;
        color:darkgreen;
    }
    .form-group{
        margin: 20px;
    }
    .btn2
    {
        border-radius: 15px;
        color:black;
        background-color: #FFFDC0;
        position: relative;
        margin-left: 100px;
        width: 75px;
        height: 30px;
    }
</style>    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update resource</div>
                <div class="card-body">
                    <form  action="{{ route('resource.update' , $resource->id) }}" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <label class="label">resource name: </label>
                            <input type="text" name="name" value="{{old('name',$resource->name)}}" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">resource is_essential: </label>
                            <input type="checkbox" name="is_essential" value="{{$resource->is_essential}}" class="form-control"  required/>
                        </div>
                        <div class="form-group">
                            <label class="label">quantity : </label>
                            <input type="number" name="quantity" value="{{$resource->quantity}}" class="form-control"   required/>
                        </div>
                        <div class="form-group">                        
                            <label class="label">resource unit: </label>
                            <input type="text" name="unit" value="{{$resource->unit}}" class="form-control"   required/>
                        </div>
                        <div class="form-group">                        
                            <label class="label">resource quantity_limit: </label>
                            <input type="number" name="quantity_limit" value="{{$resource->quantity_limit}}" class="form-control"   required/>
                        </div>
                        <div class="form-group">                        
                            <label class="label">resource unit_price: </label>
                            <input type="number" name="unit_price" value="{{$resource->unit_price}}" class="form-control"   required/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn2">Update</button>
                            <!-- <input type="submit" class="btn btn-outline-warning" /> -->
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






