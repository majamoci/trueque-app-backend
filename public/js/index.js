const reputation = document.querySelector("#reputation");
if (reputation) {
  reputation.addEventListener("mdl-componentupgraded", function() {
    this.MaterialProgress.setProgress(50);
  });
}

console.log(reputation);
