
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
                <div class="card-header">Create sale</div>
                <div class="card-body">
                    <form  action="{{ route('sale.store') }}" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            @csrf
                            <label class="label">sale date: </label>
                            <input type="date" name="date" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">sale quantity: </label>
                            <input type="number" name="quantity"  class="form-control"  required/>
                        </div>
                        <div class="form-group">
                            <label class="label">sale price: </label>
                            <input type="number" name="price"  class="form-control"   required/>
                        </div>
                        <div class="form-group">                        
                            <label class="label">sale hall id: </label>
                            <input type="number" name="hall_id"  class="form-control"   required/>
                        </div>
                        <div class="form-group">                        
                            <label class="label">product id: </label>
                            <input type="number" name="product_id"  class="form-control"   required/>
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
