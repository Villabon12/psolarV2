INSERT INTO usuario(nombre, apellido, email, telefono) 
    VALUES ('Walter', 'villabon', 'walter@villa.com', '3153711299' );
    
    SELECT v.id, e.etapa, e.porcentaje, e.id AS n, d.disponible, d.hecho, u.nombre, u.apellido, u.id AS modifica 
    FROM venta v,disponibilidad d, etapas e, usuario u 
    WHERE e.id = v.etapas_id AND d.id = v.disponibilidad_id AND u.id = v.usuario_id ORDER BY disponible ASC;
    
SELECT u.*, r.id AS rol_id, r.rol 
FROM usuario u, roles r WHERE r.id = u.roles_id;


    SELECT  u.nombre, u.apellido, d.disponible, d.hecho
FROM venta_historial vh, usuario u, disponibilidad d, venta v
WHERE v.id = 5 AND u.id=vh.modifica_usuario AND d.id=vh.disponibilidad_id AND v.id=vh.venta_id 
    
    INSERT INTO roles(rol) 
    VALUES ('Admin'), ('Lider'), ('Vendedor'), ('Cliente' );
    
    SELECT u.id, u.nombre, u.apellido, d.id AS disponibilidad, d.disponible, d.hecho FROM usuario u, disponibilidad d WHERE roles_id = 4 AND u.disponibilidad_id = d.id;
    
    INSERT INTO disponibilidad(disponible, hecho) 
    VALUES ('En progreso', 'warning'), ('Cancelado', 'danger'), ('Terminado', 'success'), ('En espera', 'info');
    
    
    INSERT INTO etapas(etapa, porcentaje) 
    VALUES ('Proceso de aprobacion', 14.28), ('Inspeccion de la propiedad', 28.56), ('Permisos con la ciudad', 42.84), ('Instalacion Solar', 57.12),
    ('Firmar acuerdo Oncor', 71.4), ('Cambiar proveedor Energia', 85.68), ('Activacion del sistema', 100);
    
    INSERT INTO venta_historial(venta, etapa, modifica_usuario) 
    VALUES ('walter', '5', '2' );
  UPDATE venta SET etapas_id=+1 WHERE id=1; 
  
  $SQL= SELECT *,U.ID ID_USER FROM usuario u, roles r
        WHERE u.roles_id=r.id AND
        u.email= 'walter@villa.com' AND u.pass= 123;
  
  INSERT INTO color(nombre, css) 
    VALUES ('0071c5', 'Azul oscuro'),('40E0D0', 'Turquesa'),('008000', 'verde')
    ,('FFD700', 'Amarillo'),('FF8C00', 'Naranja'),('FF0000', 'Rojo'),('000', 'Negro');
    
    $sql= SELECT * FROM calendario c, usuario u 
		WHERE c.usuario_id = 1 
    
    SELECT COUNT(*) as contar
        FROM usuario WHERE email='villa@villa.com' AND
        pass = '123';


insert into `estado` (`id`,`estado`, `pais_codigo_postal`) values
('2130833', 'McArthur Reef', '70'),
('3577483', 'The Narrow', '70'),
('3831601', 'Nantucket Shoals', '70'),
('3831610', 'Little Stellwagen', '70'),
('3831661', 'Cashes Ledge', '70'),
('3831676', 'Ammen Rock', '70'),
('3981608', 'Tijuana River', '70'),
('4020151', 'Southern California', '70'),
('4020248', 'Monterey Canyon', '70'),
('4030396', 'Heceta Bank', '70'),
('4031854', 'Prince of Wales', '70'),
('4031857', 'Portlock Bank', '70'),
('4031961', 'Bogoslof Canyon', '70'),
('4045408', 'Chitka Cove', '70'),
('4045409', 'West Armica', '70'),
('4045410', 'Vulcan Point', '70'),
('4045411', 'Tropical Ridge', '70'),
('4045412', 'Thirty-Seven Hill', '70'),
('4045413', 'Temnac Bay', '70'),
('4045414', 'Tanadak', '70'),
('4045415', 'Square Point', '70');