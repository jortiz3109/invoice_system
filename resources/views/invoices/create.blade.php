@extends ('layouts.base')

@section('title')Create Invoices
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <br>
            <a class="btn btn-secondary" href="/invoices">Back to Invoices</a><br><br>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1>New Invoice</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/invoices" method="POST">
                @csrf
                <div class="form-group">
                    <label for="expedition_date">Expedition date:</label>
                    <input type="text" class="form-control" id="expedition_date" name="expedition_date" placeholder="YYYY/MM/DD" value="{{ old('expedition_date') }}">
                    <label for="due_date">Due date:</label>
                    <input type="text" class="form-control" id="due_date" name="due_date" placeholder="YYYY/MM/DD" value="{{ old('due_date') }}">
                    <label for="receipt_date">Receipt date:</label>
                    <input type="text" class="form-control" id="receipt_date" name="receipt_date" placeholder="YYYY/MM/DD" value="{{ old('receipt_date') }}">
                    <label for="sale_description">Sale description:</label>
                    <input type="text" class="form-control" id="sale_description" name="sale_description" placeholder="Type a sale description" value="{{ old('sale_description') }}">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status">
                        <option value="">Select status</option>
                        <option value="sent" {{'status' == 'sent' ? 'selected' : '' }}>Sent</option>
                        <option value="rejected" {{'status'  == 'rejected' ? 'selected' : '' }}>Rejected</option>
                        <option value="overdue" {{ 'status'  == 'overdue' ? 'selected' : '' }}>Overdue</option>
                        <option value="paid" {{ 'status'  == 'paid' ? 'selected' : '' }}>Paid</option>
                        <option value="cancelled" {{ 'status'  == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>
                <br>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
