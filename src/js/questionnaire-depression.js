(function () {
  let answers = document.querySelectorAll(".questionnaire--answers--input");
  document.addEventListener("click", updateAnswers);

  function updateAnswers() {
    let total = 0;
    answers = document.querySelectorAll(".questionnaire--answers--input");
    answers.forEach(answer => {
      if (answer.checked) {
        total += Number(answer.value);
      }
    });
    total = Math.round(100 * (total / 21)) / 5;
    console.log(total);
  }
})();