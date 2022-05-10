SELECT u.*, d.id AS disponibilidad, d.disponible, d.hecho 
		FROM usuario u, disponibilidad d WHERE roles_id = 4  AND u.disponibilidad_id = d.id;`calendario`
		
		
SELECT v.id, e.etapa, e.porcentaje, e.id AS n, d.disponible, d.hecho, u.nombre, u.apellido, u.id AS modifica, u.email, u.direccion,  
		u.papa FROM venta v,disponibilidad d, etapas e, usuario u 
		WHERE e.id = v.etapas_id AND d.id = v.disponibilidad_id AND u.id = v.usuario_id ;