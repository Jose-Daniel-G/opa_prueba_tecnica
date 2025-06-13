####  Ejercicio 1: Series Lógicas y Secuencias
---

#####  1. Serie de Letras Inversas

`RQP, ONM, LKI, [ ? ], FED`  
*Respuesta correcta:* a. **IHG**  
Cada grupo de 3 letras está en orden alfabético descendente (reversa).  
---
###### 2. Serie de Letras con Incremento
`KBJ, LCK, MDL, NEM, [ ? ]`

*Respuesta:* b. **OFN**  

- Primera : K → L → M → N → **O**  
- Segunda : B → C → D → E → **F**  
- Tercera : J → K → L → M → **N**
---
###### 3. Serie Numérica Incremental
`104, 109, 115, 122, 130, [ ? ]`
*Respuesta :* c. **139**  
**Justificación:** La diferencia entre números va aumentando:

- 109 - 104 = **5**  
- 115 - 109 = **6**  
- 122 - 115 = **7**  
- 130 - 122 = **8**  
- Próximo salto: **+9 → 130 + 9 = 139**

---
###### 4. Serie Numérica Duplicada +1
`15, 31, 63, 127, 255, [ ? ]`

*Respuesta correcta: c. **511**  
**Justificación:**  
Cada número es el **doble del anterior más 1**:

- 15 × 2 + 1 = 31  
- 31 × 2 + 1 = 63  
- 63 × 2 + 1 = 127  
- 127 × 2 + 1 = 255  
- 255 × 2 + 1 = **511**

Resultado: **511** 

---

#### Ejercicio 2
Dado un grupo de 5 personas: **A, B, C, D y E**, cada una tiene una profesión distinta:  
- Artista  
- Médico  
- Periodista  
- Deportista  
- Juez  
 1.	¿Quién es el Artista?     A->ARTISTA
2.	¿Quién es el Deportista?  B->DEPORTISTA
 3.	¿Quién es el Medico?      E->MEDICO
 4.	¿Cuál de los siguientes grupos incluye a una persona que prefiere el té pero que no es el juez? 
 `e. Ninguno de los anteriores`
- B,D,A -> SON AMIGOS
- D-> ES PERIODISTA
- B->DEPORTISTA
- B,D-> BEBEN CAFÉ
- A,C-> BEBEN EL TE
- C->JUEZ BEBE TE
- E->ES MEDICO
- A->ARTISTA


---

#### PRUEBA TECNICA PARA DESARROLLADORES

 **Mínimo de calorías**: 15  
 **Peso máximo**: 10  
 **Elementos disponibles**:

  | Elemento | Peso | Calorías |
  |----------|------|----------|
  | E1       | 5    | 3        |
  | E2       | 3    | 5        |
  | E3       | 5    | 2        |
  | E4       | 1    | 8        |
  | E5       | 2    | 3        |

#### Salida Esperada

- Combinaciones válidas:
  - `E1, E2, E4` → Peso: 9, Calorías: 16
  - `E2, E3, E4` → Peso: 9, Calorías: 15
  - `E2, E4, E5` → Peso: **6**, Calorías: 16  optima
---
## Requerimientos Opcionales de solucion
1. al ser una aplicación web desarrollada en PHP y HTML, no funciona "en" un número específico de sistemas operativos de la misma manera que lo haría una aplicación de escritorio nativa.
2. Sí, la aplicación es interoperable en un nivel básico de acceso y visualización, pero no lo es en un nivel de intercambio de datos o integración compleja con otros sistemas en su estado actual.
3. Sí, en su estado actual y para su alcance, la aplicación se puede considerar de fácil mantenimiento.
5. Actualmente, el código PHP no implementa ningún mecanismo de persistencia de la información.
6. La solución actual no es escalable para un gran número de elementos. A medida que el número de elementos disponibles para la selección aumenta, el tiempo de procesamiento necesario para encontrar la combinación óptima crece exponencialmente, lo que la hace impráctica para escenarios reales con muchos elementos.

 Para mejorar la escalabilidad en escenarios con un gran número de elementos, se necesitarían algoritmos más avanzados.

 ## Este es el diseno:
![Vista](https://raw.githubusercontent.com/Jose-Daniel-G/opa_prueba_tecnica/temp/prueba.png)
- Puedes llenar forma dinamica los campos Calorias y Peso


