<html>

<head>
    <title>Profit Calculator</title>
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
</head>

<body>
    <table class="table table-striped">
        <tr>
            <td>From:</td>
            <td><b>{{ $from }}</b></td>
        </tr>
        <tr>
            <td>To:</td>
            <td><b>{{ $to }}</b></td>
        </tr>
        </tr>
        <td>Amount:</td>
        <td>
            <input type="text" name="amount" id="amount" value="{{ $plan->min_deposit }}" class="form-control mb-2">
        </td>
        </tr>
        <tr>
            <td>ROI (%):</td>
            <td><b><span id="percent">{{ $plan->return }}</span></b></td>
        </tr>
        <tr>
            <td>Profit:</td>
            <td><b><span id="profit" class="text-success">N/A</span></b></td>
        </tr>
    </table>
    <div class="d-flex justify-content-center">
        <button onclick="validatePNL()" class="btn btn-primary me-2">Calculate</button>
        <button onclick="spend()" class="btn btn-success">Spend</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myMessageModal" tabindex="-1" aria-labelledby="myMessageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-primary text-light fw-bold">
                <div class="modal-header">
                    <h5 class="modal-title" id="myMessageModalLabel">Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="message"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success text-light fw-bold"
                        data-bs-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        let min = parseFloat({{ $plan->min_deposit }});
        let max = parseFloat({{ $plan->max_deposit }});
        let roi = parseInt({{ $plan->return }});
        let amount = parseFloat($('#amount').val());
        let message = '';
        let profit = 0.00;

        function getProfit() {
            profit = ((roi / 100) * amount) + amount;
            $('#profit').text(profit);
        };

        function displayMessage(message = '') {
            $('#message').text(message);
            $('#myMessageModal').modal('show');
        }

        getProfit();

        function validatePNL() {
            amount = parseFloat($('#amount').val());

            if (amount < min) {
                displayMessage('Amount is less than minimum deposit for this plan.');
            } else if (isNaN(amount)) {
                displayMessage('Amount is invalid');
            } else if (amount > max) {
                displayMessage('Amount is greater than maximum deposit for this plan.');
            } else {
                getProfit();
            }
        }

        function spend() {
            if (opener && opener.spendform && opener.spendform.amount) {
                amount = parseFloat($('#amount').val());
                opener.spendform.amount.value = amount;
                opener.spendform.plan_id.value = {{ $plan->id }};

                window.close();
            } else {
                displayMessage('Please, return to Deposit page to spend!');
            }
        }
    </script>
</body>

</html>
