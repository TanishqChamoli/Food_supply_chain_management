// const Web3= require('web3')
const rpcURL = 'HTTP://127.0.0.1:8545'
const web3 = new Web3(rpcURL)

const abi= [
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "Sales",
		"outputs": [
			{
				"internalType": "address",
				"name": "seller",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "reciever",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "Price",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "quantity",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "cropID",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "_cropID",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "_total_quantity",
				"type": "uint256"
			},
			{
				"internalType": "address",
				"name": "_farmer",
				"type": "address"
			}
		],
		"name": "addCrop",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "cropCount",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "crops",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "cropID",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "total_quantity",
				"type": "uint256"
			},
			{
				"internalType": "address",
				"name": "farmer",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "_cropID",
				"type": "uint256"
			}
		],
		"name": "history",
		"outputs": [
			{
				"internalType": "address[]",
				"name": "",
				"type": "address[]"
			},
			{
				"internalType": "address[]",
				"name": "",
				"type": "address[]"
			},
			{
				"internalType": "uint256[]",
				"name": "",
				"type": "uint256[]"
			},
			{
				"internalType": "uint256[]",
				"name": "",
				"type": "uint256[]"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"name": "people",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "typeID",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "total_sales",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "_to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "_price",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "_quantity",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "_cropID",
				"type": "uint256"
			}
		],
		"name": "transferCrop",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	}
]

const address= '0x0b66884fF3a5778ab8592b199B6095465B11ADb3'

const contract =new web3.eth.Contract(abi , address)

var cropid=0;
var totalquantity=0;
var farmerAdd=0;
function addCrop() {
	cropid= document.getElementById('cropID').value;
	totalquantity= document.getElementById('totalQuantity').value;
	farmerAdd= document.getElementById('farmer').value;
	contract.methods.addCrop(cropid,totalquantity,farmerAdd).send({from :'0x0b66884fF3a5778ab8592b199B6095465B11ADb3'}).then(console.log);
}
