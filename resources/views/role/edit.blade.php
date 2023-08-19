
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
                <div class="card-header">Update role</div>
                <div class="card-body">
                    <form  action="{{ route('role.update' , $role->id) }}" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <label class="label">role name: </label>
                            <input type="text" name="name" value="{{old('name',$role->name)}}" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">role slug: </label>
                            <input type="text" name="slug" value="{{$role->slug}}" class="form-control"  required/>
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






