
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
                <div class="card-header">Create order</div>
                <div class="card-body">
                    <form  action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            @csrf
                            <label class="label">order date: </label>
                            <input type="date" name="date" class="form-control"  required/>
                        </div>
                        <div class="form-group">
                            <label class="label">order note: </label>
                            <input type="text" name="note" class="form-control"  required/>
                        </div>
                        <div class="form-group">                        
                            <label class="label">order hall_id: </label>
                            <input type="number" name="hall_id" class="form-control"   required/>
                        </div>
                        <div class="form-group">                        
                            <label class="label">order status: </label>
                            <input type="text" name="status"  class="form-control"   required/>
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
