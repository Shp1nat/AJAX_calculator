$(document).ready(function() {
    $("#add").click(function() {
        calculate("+");
    });

    $("#subtract").click(function() {
        calculate("-");
    });

    $("#multiply").click(function() {
        calculate("*");
    });

    $("#divide").click(function() {
        calculate("/");
    });

    $("#pow").click(function() {
        calculate("a^b");
    });
    
    $("#b√a").click(function() {
        calculate("b√a");
    });

    $("#sin").click(function() {
        calculate("sin");
    });

    $("#cos").click(function() {
        calculate("cos");
    });

    $("#tan").click(function() {
        calculate("tan");
    });

    $("#ctan").click(function() {
        calculate("ctan");
    });

    function calculate(operation) {
        var firstOperand = $("#firstOperand").val();
        var secondOperand = $("#secondOperand").val();

        $.ajax({
            type: "POST",
            url: "calculator.php",
            data: {
                firstOperand: firstOperand,
                operation: operation,
                secondOperand: secondOperand
            },
            success: function(response) {
                $("#result").html(response);
            }
        });
    }
});