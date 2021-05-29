const is_password_valid = (password) =>  /(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[\W|_])(?=.*[=]).{8,}$/.test(password);

console.log(is_password_valid('passW0rd='));
console.log(is_password_valid('C0d3YourFuture!#'));
