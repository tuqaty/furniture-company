
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
                <div class="card-header">Create dep</div>
                <div class="card-body">
                    <form  action="{{ route('dep.store') }}" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            @csrf
                            <label class="label">dep address: </label>
                            <input type="text" name="address" class="form-control"  required/>
                        </div>
                        <div class="form-group">
                            <label class="label">dep telephoe: </label>
                            <input type="text" name="telephone" class="form-control"  required/>
                        </div>
                        <div class="form-group">                        
                            <label class="label">dep manager: </label>
                            <input type="number" name="user_id" class="form-control"   required/>
                        </div>
                        <div class="form-group">                        
                            <label class="label">dep name: </label>
                            <input type="text" name="name"  class="form-control"   required/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn2">save</button>
                            <!-- <input type="submit" class="btn btn-outline-warning" /> -->
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
