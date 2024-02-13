const EXEC = require('child_process').exec;

EXEC('sass --watch index.scss:../css/style.css', (err, stdout, stderr) => {
  if (err) {
    console.error(err);
    return;
  }
  console.log(stdout);
});