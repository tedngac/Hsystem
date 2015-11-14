@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6">
                <form role="form" class="form-horizontal center-block">
                    <div class="form-group">
                        <label for="reservationNo" class="col-md-3 control-label">Reservation No</label>

                        <div class="col-md-7">
                            <input type="text" class="input-sm form-control" id="reservationNo">
                        </div>

                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary ">Search</button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="col-md-3"></div>
        </div>

        <form role="form" class="form-horizontal">
            <div class="row">

                <div class="col-md-5">
                    <fieldset id="customerInfo">
                        <legend>Customer Information</legend>

                        <div class="form-group">
                            <label for="customerId" class="col-md-3 control-label">Customer ID</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="customerId">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="customerName" class="col-md-3 control-label">Full Name</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="customerName">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dateOfBirth" class="col-md-3 control-label">Date</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="dateOfBirth">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nationality" class="col-md-3 control-label">Nationality</label>

                            <div class="col-md-9">
                                <select class="form-control" id="nationality">
                                    <option>Vietnamese</option>
                                    <option>Russian</option>
                                    <option>English</option>
                                    <option>Ukrainian</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contactNo" class="col-md-3 control-label">Contact No</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="contactNo">
                            </div>
                        </div>
                    </fieldset>

                    <fieldset id="customerInfo2">
                        <legend>Customer Information 2</legend>

                        <div class="form-group">
                            <label for="customerId2" class="col-md-3 control-label">Customer ID</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="customerId2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="customerName2" class="col-md-3 control-label">Full Name</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="customerName2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dateOfBirth2" class="col-md-3 control-label">Date</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="dateOfBirth2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nationality2" class="col-md-3 control-label">Nationality</label>

                            <div class="col-md-9">
                                <select class="form-control" id="nationality2">
                                    <option>Vietnamese</option>
                                    <option>Russian</option>
                                    <option>English</option>
                                    <option>Ukrainian</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contactNo2" class="col-md-3 control-label">Contact No</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="contactNo2">
                            </div>
                        </div>
                    </fieldset>

                    <fieldset id="customerInfo3">
                        <legend>Customer Information 3</legend>

                        <div class="form-group">
                            <label for="customerId3" class="col-md-3 control-label">Customer ID</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="customerId3">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="customerName3" class="col-md-3 control-label">Full Name</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="customerName3">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dateOfBirth3" class="col-md-3 control-label">Date</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="dateOfBirth3">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nationality3" class="col-md-3 control-label">Nationality</label>

                            <div class="col-md-9">
                                <select class="form-control" id="nationality3">
                                    <option>Vietnamese</option>
                                    <option>Russian</option>
                                    <option>English</option>
                                    <option>Ukrainian</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contactNo3" class="col-md-3 control-label">Contact No</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="contactNo3">
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <div class="col-md-3"></div>

                        <div class="col-md-9">
                            <button type="button" id="addCustomerBtn" class="btn btn-primary">Add Customer</button>
                            <button type="button" id="resetCustomerBtn" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <fieldset>
                        <legend>Room Information</legend>

                        <div class="form-group" id="rangeDate">
                            <label for="checkInOutDate" class="col-md-3 control-label">Check-In/Check-Out</label>

                            <div class="col-md-6">
                                <div class="input-daterange input-group" id="checkInOutDate">
                                    <input type="text" class="form-control" name="start"/>
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="form-control" name="end"/>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#availableRooms">Availability
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="roomType" class="col-md-3 control-label">Room Type</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="roomType">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="roomNo" class="col-md-3 control-label">Room No</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="roomNo">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="floorNo" class="col-md-3 control-label">Floor No</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" id="floorNo">
                            </div>
                        </div>

                        <div class="form-group input-group">
                            <label for="roomPrice" class="col-md-3 control-label">Price</label>

                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="roomPrice"
                                           aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-addon">$</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3"></div>

                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                                <button type="submit" class="btn btn-default ">Reset</button>
                            </div>
                        </div>

                    </fieldset>
                </div>

            </div>
        </form>
    </div>

    <div class="modal fade" id="availableRooms" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Available Rooms - Information</h4>
                </div>

                <div class="modal-body">
                    <p>The list of all the avaiable room and a generail information</p>
                </div>
            </div>
        </div>
    </div>

    <input type="text" id="noOfShownCustomers" value="1">
@endsection

@section('script')
    <script type="text/javascript">
        $(function () {

            $('#addCustomerBtn').click(function () {

            });

            $('#dateOfBirth, #dateOfBirth2').datepicker({
                startView: 2,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('.input-daterange').datepicker({
                autoclose: true,
                format: "dd/mm/yyyy"
            });
        });

    </script>
@endsection