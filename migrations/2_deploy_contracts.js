const Food = artifacts.require("Food");

module.exports = function (deployer) {
  deployer.deploy(Food);
};
