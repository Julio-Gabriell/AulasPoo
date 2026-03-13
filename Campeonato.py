championships = []

class Championship:
    def __init__(self, name):
        self.name = name
        self.players = []

    def updated_list_players(self):
        return self.players 

    def add_player_end(self, player):
        if len(self.players) >= 10: 
            return "Máximo de 10 jogadores atingido."
        if player.name.strip() == "":   
            return "Nome vazio, informe um nome válido." 
        self.players.append(player) 
        return self.updated_list_players()

    def add_player_especific(self, player, position):
        index = position - 1 
        if 0 <= index <= len(self.players):
            if len(self.players) >= 10:
                return "Máximo de 10 jogadores atingido."
            if player.name.strip() == "":   
                return "Nome vazio, informe um nome válido." 
            self.players.insert(index, player) 
            return self.updated_list_players()
        return "Posição inválida."

    def remove_player_especific(self, position):
        index = position - 1
        if 0 <= index < len(self.players):
            del self.players[index] 
            return self.updated_list_players()
        return "Posição inexistente."

    def order_players(self):
        players_copy = self.players.copy()
        players_copy.sort(key=lambda p: p.name)
        return players_copy

    def quantity_names(self, name_to_find):
        contador = 0
        for p in self.players:
            if p.name.lower() == name_to_find.lower():
                contador += 1
        return contador
    
    def __repr__(self):
        return self.name

class Player:
    def __init__(self, name: str):
        self.name = name

    def __repr__(self):
        return self.name

######################################## MENU ###########################################################

while True:
    print("="*30)
    print(" GESTOR DE CAMPEONATOS ")
    print("1. Criar novo campeonato")
    print("2. Selecionar e Gerenciar campeonato")
    print("3. Listar todos os campeonatos")
    print("0. Sair do sistema")
    print("="*30)

    try:
        option_main = int(input("O que deseja fazer? "))
    except ValueError:
        print("Erro: Digite apenas números!")
        continue

    if option_main == 0:
        print("Saindo...")
        break

    match option_main:
        case 1:
            name_camp = input("Nome do campeonato: ")
            new_camp = Championship(name_camp)
            championships.append(new_camp)
            print(f"Campeonato '{name_camp}' criado com sucesso!")

        case 2:
            if not championships:
                print("Nenhum campeonato cadastrado!")
                continue
            
            print("Campeonatos disponíveis:")
            for i, camp in enumerate(championships):
                print(f"{i + 1}. {camp.name}")
            
            try:
                idx = int(input("Selecione o número do campeonato: ")) - 1
                active_camp = championships[idx]
            except (ValueError, IndexError):
                print("Seleção inválida!")
                continue

            while True:
                print("-" * 30)
                print(f"GERENCIANDO: {active_camp.name}")
                print("-" * 30)
                print("1. Adicionar jogador ao final")
                print("2. Adicionar em posição específica")
                print("3. Remover jogador por posição")
                print("4. Ordenar ranking (A-Z)")
                print("5. Contar ocorrências de um nome")
                print("6. Listar jogadores")
                print("0. Voltar ao menu principal")
                print("-" * 30)

                try:
                    option_sub = int(input("Escolha: "))
                except ValueError:
                    print("Digite apenas números!")
                    continue

                if option_sub == 0: 
                    break

                match option_sub:
                    case 1:
                        name = input("Nome do jogador: ")
                        print(f"Lista: {active_camp.add_player_end(Player(name))}")
                    case 2:
                        name = input("Nome do jogador: ")
                        position = int(input("Posição (1, 2...): "))
                        print(f"Lista: {active_camp.add_player_especific(Player(name), position)}")
                    case 3:
                        position = int(input("Posição para remover: "))
                        print(f"Resultado: {active_camp.remove_player_especific(position)}")
                    case 4:
                        print(f"Ranking Ordenado: {active_camp.order_players()}")
                    case 5:
                        name = input("Nome para buscar: ")
                        print(f"O nome '{name}' aparece {active_camp.quantity_names(name)} vez(es).")
                    case 6:
                        print(f"Jogadores atuais: {active_camp.updated_list_players()}")
                    case _:
                        print("Opção inválida.")

        case 3:
            print(f"Lista de campeonatos: {championships if championships else 'Vazia'}")