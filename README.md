####  Ejercicio 1: Series Lógicas y Secuencias

A continuación se presentan diferentes series alfanuméricas y numéricas. Se debe identificar el patrón lógico que sigue la secuencia y seleccionar la **opción correcta**.

---

######  1. Serie de Letras Inversas

**Serie:**  
`RQP, ONM, LKI, [ ? ], FED`  
*Respuesta correcta:** a. **IHG**  
**Justificación:** Cada grupo de 3 letras está en orden alfabético descendente (reversa).  
---
###### 2. Serie de Letras con Incremento
**Serie:**  
`KBJ, LCK, MDL, NEM, [ ? ]`

Respuesta correcta: b. **OFN**  
Observamos la evolución de cada letra en cada posición:

- Primera : K → L → M → N → **O**  
- Segunda : B → C → D → E → **F**  
- Tercera : J → K → L → M → **N**
---
###### 3. Serie Numérica Incremental
**Serie:**  
`104, 109, 115, 122, 130, [ ? ]`
Respuesta correcta: c. **139**  
**Justificación:** La diferencia entre números va aumentando:

- 109 - 104 = **5**  
- 115 - 109 = **6**  
- 122 - 115 = **7**  
- 130 - 122 = **8**  
- Próximo salto: **+9 → 130 + 9 = 139**

---
###### 4. Serie Numérica Duplicada +1
**Serie:**  
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

### Enunciado

Dado un grupo de 5 personas: **A, B, C, D y E**, cada una tiene una profesión distinta:  
- Artista  
- Médico  
- Periodista  
- Deportista  
- Juez  
 1.	¿Quién es el Artista?       A->ARTISTA
2.	¿Quién es el Deportista? B->DEPORTISTA
 3.	¿Quién es el Medico?      E->MEDICO
 4.	¿Cuál de los siguientes grupos incluye a una persona que prefiere el té pero que no es el juez? 
 e. Ninguno de los anteriores
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