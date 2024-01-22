$(function() {
    $('input[name="dates"]').daterangepicker({ startDate: moment(), endDate: moment().add(5, 'day')});
})

