# treasure hunter

Declare a function in PHP and solve this problem:
---
A string is given that contains only characters:

```
'(', ')', '*'
```

**Example:**

```
"(((*))(((((*)))(*))))"
```

Let the length of the string be N.

It describes a 1-dimensional world in which you can move left and right.

```'('``` means stairs into the cave (level - 1)

```')'``` means the stairs up (level + 1)

```'*'``` means treasure

A treasure hunter wanders around the world. Its position is determined by the index in the string representing the world.

The initial level is 0, the initial index is -1 or N, at the discretion of the problem solver. 
Moving to the sign ```'('``` or ```')'``` means using the stairs. Moving to ```'*'``` does not change the level.
Setting on an index outside [0,N) has no effect.

Implement a function that will help the treasure hunter moving according to the rules given above find the smallest index in the set [0, N) such that: 
there is a treasure in it and at the level corresponding to this index there are the most treasures in the entire collection. 

The argument is the string described in the task, and the return value is the index you are looking for.

---
**Example:**
```
index:  |	0	|	1	|	2	|	3	|	4	|	5	|	6	|	7	|	8	|	9	|	10	|	11	|	12	|	13	|	14	|	15	|	16	|	17	|	18	|	19	|	20	|	21	|
string:	|	(	|	(	|	(	|	*	|	)	|	)	|	(	|	(	|	(	|	(	|	(	|	*	|	)	|	)	|	)	|	* 	|	(	|	*	|	)	|	)	|	)	|	)	|
level:  | 	-1	|	-2	|	-3	|	-3	|	-2	|	-1	|	-2	|	-3	|	-4	|	-5	|	-6	|	-6	|	-5	|	-4	|	-3	|	-3	|	-4	|	-4	|	-3	|	-2	|	-1	|	0 	|
```	
In the above case, the index you are looking for is ```'3'```;

---