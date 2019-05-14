$('input[type=radio][name=ans]').change(function() {
    if (this.value == 'other') {
        $('#other').prop('disabled', false);
    }
    else {
        $('#other').prop('disabled', true);
    }
});

function postSend(number)
{
  question = $('#question').text();
  answer = $('input[name=ans]:checked').val()
  if(answer == "Другое") answer = $('other').val();
  $.ajax({
    type: 'POST',
    url: '../hundler.php',
    data: 'quest_f=1&page='+ number +'&question='+ question + '&answer=' + answer
  });

}

function postResult()
{
  phone = $('#phone').val();
  name = $('#name').val()
  $.ajax({
    type: 'POST',
    url: '../hundler.php',
    data: 'result_f=1&name=' + name + '&phone=' = phone,
    success: function(data){
      alert(data);
    }
  });

}
