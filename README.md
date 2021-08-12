# Desafios RTI-SOLUTIONS

## Situação de aprendizagem
 A RTI Solutions, empresa consolidada no mercado na área de desenvolvimento de software, precisa implementar pequenas soluções para atender seus clientes. 
 
### Desafio I
Um dos clientes, a empresa de fretes PHL, precisa de uma aplicação web para calcular o valor da viagem de seus fretes. O sistema deve receber a cidade de origem, a cidade de destino, a distância entre elas em KM e a quantidade de pedágios no caminho. Considerando o valor fixo médio do pedágio de R$ 9,40 e o valor por KM de R$ 6,00, calcular o valor total da viagem. A saída deve ser representada como o exemplo a seguir:
  ```
- A viagem de {Campinas} à {São Paulo} irá custar o valor total de R${512,00}.
```

### Desafio II
Um segundo cliente na área de energia, a Seneletro, precisa de uma aplicação web que calcule o valor da conta de luz dos seus clientes. O sistema deve receber o consumo em Quilowatts-hora, nome completo do cliente e seu endereço (rua e número). A saída deve ser representada como o exemplo a seguir:
```
Conta de luz de {FULANO SANTOS}.
- {Rua Flores das águas, 500}.
- Consumo: {200kWh}.
- Valor a pagar: R${84,00}.
```

Lembrando que caso o consumo for acima de 120 kWh, o valor de cada kWh deverá ser 0,42 e consumo deve aparecer em vermelho. Caso contrário, o valor de cada kWh deverá ser 0,32 e consumo deve aparecer em azul, mostrando uma mensagem: “Obrigado por economizar!”. 