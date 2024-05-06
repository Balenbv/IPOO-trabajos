// Test case for incorporarCliente method
$objCliente = new Cliente("John Doe", "12345678");
$banco = new Banco([], [], 0, []);
$banco->incorporarCliente($objCliente);
$coleccionCuentasClientes = $banco->getColeccionCuentasClientes();
assert(count($coleccionCuentasClientes) === 1);
assert($coleccionCuentasClientes[0] === $objCliente);

// Test case for incorporarCuentaCorriente method
$objCliente = new Cliente("John Doe", "12345678");
$banco = new Banco([], [], 0, [$objCliente]);
$banco->incorporarCuentaCorriente("12345678", 1000);
$coleccionCuentasCorrientes = $banco->getColeccionCuentasCorrientes();
assert(count($coleccionCuentasCorrientes) === 1);
assert($coleccionCuentasCorrientes[0]->getMontoDescubierto() === 1000);
assert($coleccionCuentasCorrientes[0]->getObjCliente() === $objCliente);

// Test case for incorporarCajaAhorro method
$objCliente = new Cliente("John Doe", "12345678");
$banco = new Banco([], [], 0, [$objCliente]);
$banco->incorporarCajaAhorro("12345678");
$coleccionCajasDeAhorro = $banco->getColeccionCajasDeAhorro();
assert(count($coleccionCajasDeAhorro) === 1);
assert($coleccionCajasDeAhorro[0]->getObjCliente() === $objCliente);

// Test case for realizarDeposito method
$objCliente = new Cliente("John Doe", "12345678");
$banco = new Banco([], [], 0, [$objCliente]);
$banco->realizarDeposito("12345678", 500);
assert($objCliente->getSaldo() === 500);

// Test case for realizarRetiro method
$objCliente = new Cliente("John Doe", "12345678");
$banco = new Banco([], [], 0, [$objCliente]);
$banco->realizarDeposito("12345678", 1000);
$banco->realizarRetiro("12345678", 500);
assert($objCliente->getSaldo() === 500);