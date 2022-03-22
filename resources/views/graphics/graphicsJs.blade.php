
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>

<script type="text/javascript">


var incomeCategory = [];
var expenseCategory = [];
var income = [];
var expense = [];

$(document).ready(function(){

        $.ajax({
            type:'get',
            url:'{!!URL::to('dataFromGraphics')!!}',
            data:{},
            success:function(data){
                /* los datos de todas las categorias */
                data[0].forEach(IncomeCategory => {incomeCategory.push(IncomeCategory.categoryName);income.push(0) });
                data[1].forEach(ExpenseCategory => {expenseCategory.push(ExpenseCategory.categoryName);expense.push(0) });
                console.log(data)

                data[2].forEach(Income => {
                    for (let i = 0; i < data[0].length; i++) {
                        if (data[0][i].id == Income.income_category_id ) {
                            income[i] = income[i] + Income.value;
                        }
                    }
                });
                console.log(data[1]);
                data[3].forEach(Expense => {
                    for (let i = 0; i < data[1].length; i++) {
                        console.log(data[1][i].id +" " +Expense.expense_category_id)
                        if (data[1][i].id == Expense.expense_category_id ) {

                            expense[i] = expense[i] + Expense.value;
                        }
                    }
                    //console.log(expense)
                incomeGraph(incomeCategory, income)
                expenseGraph(expenseCategory, expense)

                });
				},
				error:function(){

				}
    });
});


 function incomeGraph(incomeCategory, income) {

var ctx = document.getElementById("incomeDiv").getContext('2d');

var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: incomeCategory,
        datasets: [{
            label: 'categarias de ingresos',
            data: income ,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

 }

 function expenseGraph(expenseCategory, expense) {

var ctx = document.getElementById("expenseDiv").getContext('2d');

var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: expenseCategory,
        datasets: [{
            label: 'categorias de ingresos',
            data: expense ,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

}

</script>
