@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <form role="form" class="form-horizontal">
                    <fieldset>
                        <legend>Search Parameters</legend>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="radioDates" id="radioSingleDate" value="singleDate"
                                               checked="">
                                        Single Date Search
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="radioDates" id="radioRangeDate" value="rangeDate">
                                        Date Range Search
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" id="singleDate">
                            <label for="inputSingleDate" class="col-md-2 control-label">Date</label>

                            <div class="col-md-10">
                                <input type="text" class="input-sm form-control" id="inputSingleDate">
                            </div>
                        </div>

                        <div class="form-group" id="rangeDate">
                            <label for="inputRangeDate" class="col-md-2 control-label">Range</label>

                            <div class="col-md-10">
                                <div class="input-daterange input-group" id="inputRangeDate">
                                    <input type="text" class="input-sm form-control" name="start"/>
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="input-sm form-control" name="end"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <button type="submit" class="btn btn-primary btn-sm">Search</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

            <div class="col-md-9">

                <table class="table">
                    <thead>
                    <tr>
                        <td>Room No</td>
                        <td>Customer Name</td>
                        <td>Payment Date</td>
                        <td>Status</td>
                        <td>More Info</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>201</td>
                        <td>Dean Winchester</td>
                        <td>19/11/2015</td>
                        <td><span class="label label-warning">Not Paid</span></td>
                        <td>
                            <button type="submit" class="btn btn-default btn-sm" data-toggle="modal"
                                    data-target="#details">Details
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>202</td>
                        <td>Sam Winchester</td>
                        <td>05/11/2015</td>
                        <td><span class="label label-success">Paid</span></td>
                        <td>
                            <button type="submit" class="btn btn-default btn-sm" data-toggle="modal"
                                    data-target="#details">Details
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>203</td>
                        <td>Andrew Winchester</td>
                        <td>05/11/2015</td>
                        <td><span class="label label-danger">Not Paid Overdue</span></td>
                        <td>
                            <button type="submit" class="btn btn-default btn-sm" data-toggle="modal"
                                    data-target="#details">Details
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>201</td>
                        <td>Dean Winchester</td>
                        <td>19/11/2015</td>
                        <td><span class="label label-success">Paid</span></td>
                        <td>
                            <button type="submit" class="btn btn-default btn-sm" data-toggle="modal"
                                    data-target="#details">Details
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>202</td>
                        <td>Sam Winchester</td>
                        <td>05/11/2015</td>
                        <td><span class="label label-success">Paid</span></td>
                        <td>
                            <button type="submit" class="btn btn-default btn-sm" data-toggle="modal"
                                    data-target="#details">Details
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>203</td>
                        <td>Andrew Winchester</td>
                        <td>05/11/2015</td>
                        <td><span class="label label-danger">Not Paid Overdue</span></td>
                        <td>
                            <button type="submit" class="btn btn-default btn-sm" data-toggle="modal"
                                    data-target="#details">Details
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="modal fade" id="details" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Information - Customer Name</h4>
                </div>

                <div class="modal-body">
                    <p>There goes some customer information and so on an so forth</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script type="text/javascript">
        $(function () {
            init();

            $('input[name=radioDates]:radio').change(function () {
                checkDateRadioSelected($(this).val());
            });

            $('#inputSingleDate').datepicker({
                autoclose: true,
                todayBtn: "linked",
                todayHighlight: true,
                format: "dd/mm/yyyy"
            });

            $('.input-daterange').datepicker({
                autoclose: true,
                format: "dd/mm/yyyy"
            });
        });

        function checkDateRadioSelected(value) {
            if (value == "singleDate") {
                $('#rangeDate').hide();
                $('#rangeDate :input').attr('disabled', 'disabled');
                $('#singleDate').show();
                $('#singleDate :input').removeAttr('disabled');
            } else if (value == "rangeDate") {
                $('#singleDate').hide();
                $('#singleDate :input').attr('disabled', 'disabled');
                $('#rangeDate').show();
                $('#rangeDate :input').removeAttr('disabled');
            }
        }

        function init() {
            checkDateRadioSelected($('input[name=radioDates]:radio').val());
        }
    </script>

@endsection