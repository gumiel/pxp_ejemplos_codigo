

/**
 * 
 * Ejemplo de un procedimiento directo
 * 
 */
DO $$
DECLARE

  v_centro_costo record;
  v_id_migraactivos INTEGER;
  v_codigo_cc VARCHAR;
  v_valor DECIMAL;
  
BEGIN 
  
  FOR v_dato in (select utlimo.id_tabla
                from afc.ttabla utlimo)
  LOOP
    
    raise notice v_dato.id_tabla;

  END LOOP;
  
  IF v_centro_costo is not null THEN 
    raise notice 'Entro IF';
  ELSE 
    raise notice 'Entro ELSE';
  END IF;
  
  
  
END $$;