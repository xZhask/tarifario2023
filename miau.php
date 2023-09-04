<?php
require_once 'App/models/ClsCpt.php';
$objProcedimiento = new ClsProcedimiento();

$nvl = 1;
$tarifario = $objProcedimiento->CargarTarifario($nvl);
$tarifario = $tarifario->fetchAll(PDO::FETCH_OBJ);
$newTarifario = [];
foreach ($tarifario as $procedimiento) {
    array_push($newTarifario, $procedimiento->codigoCpms);
}
echo json_encode($newTarifario);
$tarifario = [
    '10060', '10061', '10080', '10120', '10121', '10140', '10160', '11000', '11055', '11056', '11057', '11201', '11720', '11730', '11750', '11976', '12001', '12002', '12004', '12005', '12032', '13302', '15849', '15851', '15854', '15859', '15880', '15881', '15884', '16000', '17999', '20680', '24075', '28190', '29200', '29240', '29260', '29280', '29405', '29515', '29530', '29540', '29550', '29705', '29799', '30300', '30901', '30905', '36000', '41708', '41800', '51702', '58300', '58301', '58999.01', '59300', '59401', '59401.01', '59401.02', '59401.03', '59401.04', '59401.05', '67800', '67930', '69200', '69210', '70210', '70250', '70260', '70330', '71010', '71020', '71021', '71030', '71035', '71100', '71110', '71120', '71130', '72040', '72050', '72070', '72074', '72080', '72100', '72110', '72114', '72120', '72170', '72190', '72202', '73000', '73010', '73020', '73030', '73050', '73060', '73070', '73080', '73090', '73100', '73110', '73120', '73130', '73140', '73510', '73520', '73550', '73560', '73562', '73564', '73565', '73580', '73590', '73600', '73610', '73620', '73630', '73650', '74000', '74020', '76816', '76817', '76830', '80055', '80061', '80062', '80076', '81000', '81001', '81002', '81005', '81015', '81025', '82040', '82247', '82248', '82270', '82271', '82272', '82274', '82465', '82540', '82565', '82947', '82948', '82950', '82952', '83009', '83050', '83520', '83718', '83719', '83721', '84152', '84153', '84155', '84163', '84450', '84460', '84478', '84520', '84540', '84550', '84560', '84703', '84704', '84999', '85002', '85004', '85007', '85013', '85014', '85018', '85027', '85031', '85032', '85049', '85060', '85345', '85348', '85590', '85651', '85652', '86140', '86406', '86592', '86593', '86703', '86900', '86901', '87115', '87169', '87172', '87177', '87177.01', '87178', '87205', '87206', '87210', '87220', '87426', '87635', '87999.01', '89055', '90471', '90472', '90646', '90649', '90650', '90656', '90657', '90658', '90670', '90681', '90700', '90701', '90702', '90707', '90708', '90712', '90713', '90714', '90717', '90718', '90723', '90744', '90746', '90749.01', '90765', '90772', '90780', '90782', '90784', '90788', '90806', '90806.01', '90806.02', '90806.03', '90806.04', '90806.05', '90806.06', '90832', '90834', '90837', '90839', '90845', '90853', '90861', '90862', '90866', '90876', '91010', '91105', '92015', '92065', '92100', '92250', '93000', '93041', '93784', '93786', '94640', '94760', '94799', '94799.02', '94799.03', '96100', '96100.02', '96100.05', '96101', '96102', '96103', '96111', '96360', '96361', '96365', '96366', '96367', '96368', '96370', '96372', '96374', '96375', '96379', '96904', '97001', '97002', '97003', '97006.02', '97010', '97012', '97014', '97020', '97024', '97026', '97032', '97034', '97035', '97036', '97110', '97112', '97113', '97116', '97124', '97125', '97140', '97520', '97521', '97522', '97530', '97535', '97597', '97602', '97770', '97788', '97799', '97802', '97803', '98960', '98961', '98962', '98967', '99000', '99024', '99078', '99080', '99091', '99173', '99187', '99188.01', '99194', '99199.03', '99199.05', '99201', '99205', '99205.01', '99206', '99207', '99207.01', '99207.03', '99207.04', '99208', '99208.01', '99208.02', '99209', '99210', '99211', '99212', '99214', '99215', '99230', '99232', '99233', '99242', '99246', '99251', '99252', '99253', '99254', '99281', '99282', '99324', '99343', '99344', '99367', '99381', '99382', '99385', '99386', '99401', '99401.01', '99401.03', '99401.04', '99401.05', '99401.06', '99401.07', '99401.08', '99401.1', '99401.12', '99401.13', '99401.15', '99401.19', '99401.2', '99401.22', '99401.23', '99401.24', '99401.25', '99401.26', '99401.27', '99401.28', '99401.3', '99401.31', '99401.32', '99401.33', '99401.34', '99402', '99402.01', '99402.03', '99402.04', '99402.05', '99402.06', '99402.08', '99402.09', '99402.14', '99403', '99403.01', '99404', '99441', '99441.02', '99442', '99442.01', '99455', '99499.01', '99499.08', '99499.09', '99499.1', '99501', '99509', '99600', '99700', 'C0009', 'C0010', 'C0011', 'C0012', 'C0041.01', 'C0091', 'C2062', 'C2111', 'C7002', 'D0120', 'D0140', 'D0150', 'D0160', 'D0220', 'D0240', 'D0250', 'D0270', 'D0330', 'D0350', 'D0470', 'D1110', 'D1204', 'D1206', 'D1310', 'D1330', 'D1351', 'D2140', 'D2150', 'D2160', 'D2330', 'D2331', 'D2332', 'D2335', 'D2385', 'D2386', 'D2390', 'D2391', 'D2392', 'D2393', 'D2394', 'D2662', 'D2910', 'D2915', 'D2920', 'D2930', 'D2940', 'D2960', 'D3110', 'D3120', 'D3220', 'D3221', 'D3230', 'D3240', 'D3310', 'D3311', 'D3320', 'D3321', 'D3330', 'D3331', 'D3332', 'D3346', 'D3347', 'D3348', 'D3352', 'D3410', 'D3430', 'D4210', 'D4211', 'D4240', 'D4341', 'D4342', 'D4381', 'D4910', 'D5410', 'D5411', 'D5421', 'D5422', 'D5860', 'D5861', 'D5925', 'D5986', 'D6930', 'D7111', 'D7140', 'D7176', 'D7210', 'D7220', 'D7230', 'D7241', 'D7510', 'D7530', 'D7910', 'D7911', 'D7972', 'D9110', 'D9215', 'D9911', 'D9951', 'D9952', 'E1311', 'E2340', 'E2341', 'E2395', 'E2396', 'E2397', 'E2398', 'E2399', 'E2400', 'E3319', 'E3321', 'E3322', 'E4110', 'E4120', 'E8000', 'U0901'
];
echo '<br>';
echo json_encode($tarifario);
