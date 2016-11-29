class Robot(object):
    def __init__(self, tank, id):
        self.__tank = tank
        self.__life = 10
        self.__armor = 1
        self.__range = 5
        self.__pm = 3
        self.__pa = 1

    def getTank(self):
        return self.__tank
    def getTankId(self):
        return self.__tank.id
    def getLife(self):
        return self.__life
    def getArmor(self):
        return self.__armor
    def getRange(self):
        return self.__range
    def getPM(self):
        return self.__pm
    def getPA(self):
        return self.__pa
    def setLife(self, life):
        self.__life = life
    def setPM(self, pm):
        self.__pm = pm
    def setPA(self, pa):
        self.__pa = pa
    def getWD(self):
        return 1
    def getWPa(self):
        return 2

class Game(object):
    def __init__(self, r1, r2):
        self.__size = 32
        self.__map = []
        self.__current = 0
        self.__robots = [r1, r2]
        self.__result = []
        for i in range (self.__size*self.__size):
            self.__map.append(-1)
        self.__map[0] = 0
        self.__map[self.__size*self.__size - 1] = 1

    def getTankId(self):
        return self.__current

    def getEnemyTankId(self):
        return not self.__current

    def getCellPosX(self, numCell):
        return numCell - (self.__size * (numCell / self.__size))

    def getCellPosY(self, numCell):
        return numCell / self.__size

    def getCellDistance(self, numCellA, numCellB):
        return (abs(self.getCellPosX(numCellB) - self.getCellPosX(numCellA)) + abs(self.getCellPosY(numCellB) - self.getCellPosY(numCellA)) )

    def getCellFromXY(self, x, y):
        return y*self.__size + x

    def getPosition(self, TankID):
        for i in range(self.__size*self.__size):
            if self.__map[i] == TankID:
                return i
        return -1

    def getLife(self, TankID):
        return self.__robots[TankID].getLife()

    def getPM(self, TankID):
        return self.__robots[TankID].getPM()

    def getPA(self, TankID):
        return self.__robots[TankID].getPA()

    def getRange(self, TankID):
        return self.__robots[TankID].getRange()

    def moveTank(self, NumCell):
        if NumCell > self.__size*self.__size - 1:
            return - 1
        pm = self.getPM(self.__current)
        pos = self.getPosition(self.__current)
        xp = self.getCellPosX(NumCell)
        yp = self.getCellPosY(NumCell)
        x = self.getCellPosX(pos)
        y = self.getCellPosY(pos)
        while pm > 0 and pos != NumCell:
            if x > xp:
                # gauche
                if pm > 0 and self.__map[self.getCellFromXY(x - 1, y)] != 0:
                    self.__result.append([self.__current, "moveLeft", 0, 0])
                    self.__map[pos] = -1
                    self.__map[self.getCellFromXY(x - 1, y)] = self.__current
                    pm -= 1
                    x -= 1
                    pos = self.getPosition(self.__current)

            if x < xp :
                #droite
                if pm > 0 and self.__map[self.getCellFromXY(x + 1, y)] != 0:
                    self.__result.append([self.__current, "moveRight", 0, 0])
                    self.__map[pos] = -1
                    self.__map[self.getCellFromXY(x + 1, y)] = self.__current
                    pm -=1
                    x -= 1
                    pos = self.getPosition(self.__current)

            if y > yp :
                #Bas
                if pm > 0 and self.__map[self.getCellFromXY(x, y-1)] != 0:
                    self.__result.append([self.__current, "moveDown", 0, 0])
                    self.__map[pos] = -1
                    self.__map[self.getCellFromXY(x , y-1)] = self.__current
                    pm -=1
                    y -= 1
                    pos = self.getPosition(self.__current)

            if y < yp :
                #Haut
                if pm > 0 and self.__map[self.getCellFromXY(x, y-1)] != 0:
                    self.__result.append([self.__current, "moveUp", 0, 0])
                    self.__map[pos] = -1
                    self.__map[self.getCellFromXY(x, y+1)] = self.__current
                    pm -=1
                    y += 1
                    pos = self.getPosition(self.__current)

        self.__robots[self.__current].setPM(pm)

    def shot(self):
        pos = self.getPosition(self.getEnemyTankId(self))
        x = self.getCellPosX(pos)
        y = self.getCellPosY(pos)

        posp = self.getPosition(self.__current)
        xp = self.getCellPosX(posp)
        yp = self.getCellPosY(posp)

        dist = self.getCellDistance(self.getCellFromXY(x,y),self.getCellFromXY(xp,yp))

        pa = self.getPA(self)
        paWe = self.__robots[self.__current].getWPa()
        dWe = self.__robots[self.__current].getWD()

        if pa - paWe >= 0:
            if(dist > range):
                self.__result.append([self.__current, "shoot", x+range/2, y+range/2])
            else:
                self.__result.append([self.__current, "shoot",xp, yp])
                self.__robots[self.__current].setLife(self.__robots[self.__current].getLife()-dWe)
            self.__robots[self.__current].setPa(pa-paWe)

