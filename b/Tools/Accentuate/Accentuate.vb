'COPYRIGHT INFORMATION.
'This file has been automatically converted from a Word macro of Bertrand Michelet. License info:
'> A GNU-type license is perfectly all right for me. I do not plan to 
'> make any business with this macro, & don't want to maintain it for years 
'> (fire & forget philosophy). If it is useful to the Latin-lover 
'> community, perfect, BUT I don't want the released version to be 
'> obviously faulty, corrected by a v2, v3, proposed by various authors... 
'> which leads to a configuration mess. My suggestion is to share the work 
'> as long as the macro may be improved : Do use it as you like in the 
'> VulSearch program (& whatever related program or project you may know 
'> of), and collect whatever bug report you receive on the latest version. 
'> I will correct the exception list as long as I can be reached on this 
'> professional e-mail. Once the bug report flows out, the stabilized code 
'> may be given in the public domain, to be used freely and unattended.


Option Strict Off
Option Explicit On 
'Namespace Accentuation
Public Class Accentuate
    '   ACCENTUATION LATINE DES MOTS POLYSILLABIQUES
    '
    '1/ Les monosyllabes ne sont pas accentués (sauf en fin de phrase).
    '2/ Les mots de deux syllabes sont accentués sur la première (l'accent est non marqué).
    '3/ L'accent n'est marqué que pour les mots de trois syllabes et plus :
    '3p:Si l'avant dernière syllabe (=pénultième) est longue, elle est accentuée ;
    '3a:Si l'avant dernière syllabe est courte, l'accent est sur la précédente (antépénultième).
    '   Le problème, à présent, est : comment savoir si une syllabe est longue ?
    ' ==============================
    '   Pour en être sûr, il faut voir un dictionnaire. Certaines règles générales :
    '*  Certaines finales de conjugaisons ou déclinaisons sont toujours longues ou courtes
    '   (mais il faut être sûr que le mot est effectivement une forme conjuguée).
    '*  Une voyelle double (ae, au, oe) est longue.
    '*  Une voyelle devant deux consonnes (deux sons de consonne) est longue, mais attention:
    '   -   "X" compte comme deux sons, donc double.
    '   -   "H" n'est pas prononcé, donc ne compte pas comme consonne. De même,
    '   -   Les combinaisons du type "CH", "PH", "TH" comptent comme un seul son.
    '   -   Les combinaisons d'une explosive (BCDGPT) et d'une liquide (LR) compte pour un son.
    ' ==============================
    '   Le suffixe (dernière syllabe) n'est généralement pas discriminant.
    '   Il faut regarder où sont les voyelles longues de la racine, et éventuellement les
    '   voyelles longues de la déclinaison ou de la conjuguaison, s'il y en a plusieurs.
    ' ==============================
    '   Les voyelles longes sont plutôt rares, et donc, toutes choses égales par ailleurs,
    '   les mots sont plutôt accentués sur l'antépénultième. Cependant, devant certaines consonnes,
    '   la proportion s'inverse (eg, "S").
    ' ==============================
    '   Problème d'homonymie :
    '   Dans certaines conjugaisons, le radical peut être long ou court suivant le temps,
    '   et on ne peut pas faire la différence par le suffixe : l'accent dépend du sens.
    '   EG : venio, venis, venire, ve:ni, ventum :
    '   pas de différence formelle possible entre venit (il vient) et ve:nit (il vint).
    '   Confusion possible entre le parfait et le présent (-it), et le parfait et l'impératif (-i).
    '   => Option prise = on suppose que le récit est au passé.
    '
    ' homonymie : calígo cáligas ; María mária
    ' Certaines homonymies peuvent se lever suivant la finale :
    ' Pb de *occidat (se coucher à l'occident) vs occ*idit (tuer), Sal*ome vs S*alomon, trans*ite vs tr*ansitus
    '
    ' Le Pb n'est pas soluble sans une analyse grammaticale & sémantique, beaucoup plus complexe.
    '
    Shared Mot_Courant As String
    Shared Paragraphe_Courant As String
    Shared resultat As String
    Private Shared curseur As Short
    Private Const consonnes As String = "bcdfghjklmnpqrstvxz"
    Private Const voyelles As String = "aæeëioœuyáéíóúýÁÉËÍÓÚÝÆŒ"
    Private Const Marque_Accent As String = "" ' marque l'accent placé dans le mot pour déboguer
    ' Structure du mot = Radical + Voyelle_1 + Consonnes_1 + Voyelle_2 + Consonnes_2+Suffixe+Post_Suffixe
    Private Shared Post_Suffixe As String
    Private Shared Suffixe As String
    Private Shared Consonnes_2 As String
    Private Shared Voyelle_2 As String
    Private Shared Consonnes_1 As String
    Private Shared Voyelle_1 As String
    Private Shared Radical As String
    Private Shared MoT As String

    Public Shared Function DoAccentuate(ByVal s As String) As String
        Dim Nouveau_Terme As String
        Mot_Courant = s
        decouper_mot_courant()
        If Voyelle_1 <> "" Then '   il y a trois syllabes ou plus
            Accentuer_mot_courant()
            'UPGRADE_WARNING: Couldn't resolve default property of object Nouveau_Terme. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            Nouveau_Terme = Radical & Voyelle_1 & Consonnes_1 & Voyelle_2 & Consonnes_2 & Suffixe & Post_Suffixe
            'UPGRADE_WARNING: Couldn't resolve default property of object Nouveau_Terme. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            DoAccentuate = Nouveau_Terme
        Else
            DoAccentuate = Mot_Courant
        End If
        Dim i As Integer = DoAccentuate.IndexOf("áe")
        If i >= 0 Then
            DoAccentuate = DoAccentuate.Substring(0, i) & "ǽ" & DoAccentuate.Substring(i + 2)
        End If
    End Function


    Private Shared Sub AntePenultieme() 'aæeioœuyáéíóúýÁÉÍÓÚÝÆŒ
        If Voyelle_1 = "a" Then
            Voyelle_1 = "á"
        ElseIf Voyelle_1 = "A" Then
            Voyelle_1 = "Á"
        ElseIf Voyelle_1 = "æ" Then
            Voyelle_1 = "ǽ"
        ElseIf Voyelle_1 = "ae" Then
            Voyelle_1 = "ǽ"
        ElseIf Voyelle_1 = "Æ" Then
            Voyelle_1 = "Ǽ"
        ElseIf Voyelle_1 = "Ae" Then
            Voyelle_1 = "Ǽ"
        ElseIf Voyelle_1 = "au" Then
            Voyelle_1 = "áu"
        ElseIf Voyelle_1 = "Au" Then
            Voyelle_1 = "Áu"
        ElseIf Voyelle_1 = "E" Then
            Voyelle_1 = "É"
        ElseIf Voyelle_1 = "e" Then
            Voyelle_1 = "é"
        ElseIf Voyelle_1 = "i" Then
            Voyelle_1 = "í"
        ElseIf Voyelle_1 = "I" Then
            Voyelle_1 = "Í"
        ElseIf Voyelle_1 = "o" Then
            Voyelle_1 = "ó"
        ElseIf Voyelle_1 = "O" Then
            Voyelle_1 = "Ó"
        ElseIf Voyelle_1 = "oe" Then
            Voyelle_1 = "óe"
        ElseIf Voyelle_1 = "Œ" Then
            Voyelle_1 = "Óe"
        ElseIf Voyelle_1 = "œ" Then
            Voyelle_1 = "óe"
        ElseIf Voyelle_1 = "u" Then
            Voyelle_1 = "ú"
        ElseIf Voyelle_1 = "U" Then
            Voyelle_1 = "Ú"
        ElseIf Voyelle_1 = "y" Then
            Voyelle_1 = "ý"
        End If
        Voyelle_1 = Marque_Accent & Voyelle_1
    End Sub

    Private Shared Sub Penultieme() 'aæeioœuyáéíóúý
        If Voyelle_2 = "a" Then
            Voyelle_2 = "á"
        ElseIf Voyelle_2 = "ae" Then
            Voyelle_2 = "ǽ"
        ElseIf Voyelle_2 = "æ" Then
            Voyelle_2 = "ǽ"
        ElseIf Voyelle_2 = "au" Then
            Voyelle_2 = "áu"
        ElseIf (Voyelle_2 = "e") Then 'Or (Voyelle_2 = "ë") Then
            Voyelle_2 = "é"
        ElseIf Voyelle_2 = "i" Then
            Voyelle_2 = "í"
        ElseIf Voyelle_2 = "o" Then
            Voyelle_2 = "ó"
        ElseIf (Voyelle_2 = "œ") Or (Voyelle_2 = "oe") Then
            Voyelle_2 = "óe"
        ElseIf Voyelle_2 = "u" Then
            Voyelle_2 = "ú"
        ElseIf Voyelle_2 = "au" Then
            Voyelle_2 = "aú"
        ElseIf Voyelle_2 = "y" Then
            Voyelle_2 = "ý"
        End If
        Voyelle_2 = Marque_Accent & Voyelle_2
    End Sub
    Private Shared Sub Cas_Douteux()
        Radical = "[??]" & Radical
        Suffixe = Suffixe & "(??)"
    End Sub
    Private Shared Sub Cas_Général()
        ' Repérage des accentuation basées sur une règle générale
        '    Radical = "[]" + Radical
        '    Suffixe = Suffixe + "()"
    End Sub

    Private Shared Sub decouper_mot_courant()
        ' Structure du mot = Radical + Voyelle_1 + Consonnes_1 + Voyelle_2 +Consonnes_2+Suffixe
        Post_Suffixe = ""
        Suffixe = ""
        Consonnes_2 = ""
        Voyelle_2 = ""
        Consonnes_1 = ""
        Voyelle_1 = ""
        Radical = ""
        Radical = ""
        curseur = Len(Mot_Courant)
        ' sortie des caractères non lettre (blancs, virgules,...)
        While InStr(1, consonnes & voyelles, Mid(Mot_Courant, curseur, 1), CompareMethod.Text) = 0
            Post_Suffixe = Mid(Mot_Courant, curseur, 1) & Post_Suffixe
            curseur = curseur - 1
            If curseur = 0 Then Exit Sub
        End While
        '   identification du suffixe
        '   consonnes finales éventuelles
        'UPGRADE_WARNING: Couldn't resolve default property of object decouper_consonnes. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        Suffixe = decouper_consonnes()
        Suffixe = decouper_voyelle() + Suffixe
        ' cas particulier type -aus qui doit s'analyser comme -a-us en final :
        ' il faut régurgiter un caractère pour reprendre la lecture correctement.
        If Left(Suffixe, 2) = "au" Then
            Suffixe = Right(Suffixe, Len(Suffixe) - 1)
            curseur = curseur + 1
        End If
        If curseur = 0 Then Exit Sub
        If (Suffixe = "e") And (curseur > 1) Then '   cas particulier du -que final :
            If LCase(Mid(Mot_Courant, curseur - 1, 2)) = "qu" Then
                Suffixe = Mid(Mot_Courant, curseur - 1, 2) & Suffixe
                curseur = curseur - 2
            End If
        End If
        'UPGRADE_WARNING: Couldn't resolve default property of object decouper_consonnes. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        Consonnes_2 = decouper_consonnes()
        If curseur = 0 Then Exit Sub
        'UPGRADE_WARNING: Couldn't resolve default property of object decouper_voyelle. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        Voyelle_2 = decouper_voyelle()
        If curseur = 0 Then Exit Sub
        'UPGRADE_WARNING: Couldn't resolve default property of object decouper_consonnes. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        Consonnes_1 = decouper_consonnes()
        If curseur = 0 Then Exit Sub
        'UPGRADE_WARNING: Couldn't resolve default property of object decouper_voyelle. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        Voyelle_1 = decouper_voyelle()
        ' cas particulier du coercere qui doit se lire co-erce-re
        If Voyelle_1 & Consonnes_1 & Voyelle_2 = "oerce" Then
            Voyelle_1 = "e"
            curseur = curseur + 1
        End If
        If curseur = 0 Then Exit Sub
        Radical = Mid(Mot_Courant, 1, curseur)
    End Sub

    Private Shared Function decouper_voyelle() As String
        Dim TheTest As Object
        Dim Voyelle_Composee As Object
        If curseur = 0 Then
            'UPGRADE_WARNING: Couldn't resolve default property of object decouper_voyelle. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            decouper_voyelle = ""
            Exit Function
        ElseIf curseur > 1 Then  ' test de voyelles composées : au, ae, oe (pas ë ! )
            'UPGRADE_WARNING: Couldn't resolve default property of object Voyelle_Composee. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            Voyelle_Composee = Mid(Mot_Courant, curseur - 1, 2)
            'UPGRADE_WARNING: Couldn't resolve default property of object TheTest. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            TheTest = LCase(Mid(Mot_Courant, curseur - 1, 2))
            'UPGRADE_WARNING: Couldn't resolve default property of object TheTest. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            If (TheTest = "au") Or (TheTest = "ae") Or (TheTest = "oe") Then
                'UPGRADE_WARNING: Couldn't resolve default property of object Voyelle_Composee. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
                'UPGRADE_WARNING: Couldn't resolve default property of object decouper_voyelle. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
                decouper_voyelle = Voyelle_Composee
                curseur = curseur - 2
                Exit Function 'trouvé - terminé
            End If
        End If
        '   Cas général : pas de voyelle double, on prend la dernière lettre
        decouper_voyelle = Mid(Mot_Courant, curseur, 1)
        curseur = curseur - 1
    End Function

    Private Shared Function decouper_consonnes() As String
        Dim doublon As String
        resultat = ""
        If curseur > 1 Then
            'UPGRADE_WARNING: Couldn't resolve default property of object doublon. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            doublon = LCase(Mid(Mot_Courant, curseur - 1, 2))
            If (doublon) = "qu" Then
                'UPGRADE_WARNING: Couldn't resolve default property of object doublon. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
                resultat = doublon
                curseur = curseur - 2
            End If
            If curseur >= 4 Then ' problème particulier du "argu-"
                'UPGRADE_WARNING: Couldn't resolve default property of object doublon. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
                If (doublon = "gu") And (LCase(Mid(Mot_Courant, curseur - 3, 4)) <> "argu") Then
                    'UPGRADE_WARNING: Couldn't resolve default property of object doublon. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
                    resultat = doublon
                    curseur = curseur - 2
                End If
            End If
        End If
        'UPGRADE_WARNING: Couldn't resolve default property of object decouper_consonnes. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        decouper_consonnes = resultat
        If curseur = 0 Then Exit Function
        While InStr(1, consonnes, Mid(Mot_Courant, curseur, 1), CompareMethod.Text) <> 0
            resultat = Mid(Mot_Courant, curseur, 1) & resultat
            curseur = curseur - 1
            'UPGRADE_WARNING: Couldn't resolve default property of object decouper_consonnes. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            decouper_consonnes = resultat
            If curseur = 0 Then Exit Function
        End While
    End Function

    Private Shared Function Nombre_Consonne(ByRef chaine As String) As Integer
        Dim le_nombre As Integer
        'UPGRADE_WARNING: Couldn't resolve default property of object le_nombre. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        le_nombre = Len(chaine)
        'UPGRADE_WARNING: Couldn't resolve default property of object chaine. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        'UPGRADE_WARNING: Couldn't resolve default property of object le_nombre. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        If InStr(1, chaine, "h", CompareMethod.Text) <> 0 Then le_nombre = le_nombre - 1
        'UPGRADE_WARNING: Couldn't resolve default property of object chaine. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        'UPGRADE_WARNING: Couldn't resolve default property of object le_nombre. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        If InStr(1, chaine, "u", CompareMethod.Text) <> 0 Then le_nombre = le_nombre - 1
        'UPGRADE_WARNING: Couldn't resolve default property of object chaine. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        'UPGRADE_WARNING: Couldn't resolve default property of object le_nombre. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        If InStr(1, chaine, "x", CompareMethod.Text) <> 0 Then le_nombre = le_nombre + 1
        'UPGRADE_WARNING: Couldn't resolve default property of object le_nombre. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        'UPGRADE_WARNING: Couldn't resolve default property of object Nombre_Consonne. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        Nombre_Consonne = le_nombre
    End Function

    Private Shared Function alphabetique(ByRef caractere As String) As String
        'UPGRADE_WARNING: Couldn't resolve default property of object caractere. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        If (caractere >= "a") And (caractere <= "z") Then
            'UPGRADE_WARNING: Couldn't resolve default property of object alphabetique. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            alphabetique = True
            'UPGRADE_WARNING: Couldn't resolve default property of object caractere. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        ElseIf (caractere >= "A") And (caractere <= "Z") Then
            'UPGRADE_WARNING: Couldn't resolve default property of object alphabetique. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            alphabetique = True
            'UPGRADE_WARNING: Couldn't resolve default property of object caractere. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        ElseIf InStr(1, voyelles, caractere, CompareMethod.Text) <> 0 Then
            'UPGRADE_WARNING: Couldn't resolve default property of object alphabetique. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            alphabetique = True
        Else
            'UPGRADE_WARNING: Couldn't resolve default property of object alphabetique. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            alphabetique = False
        End If
    End Function

    Private Shared Sub Accentuer_mot_courant() 'aæeëioœuyáéíóúýÁÉËÍÓÚÝÆŒ
        ' construction et nettoyage du "mot" examiné
        MoT = LCase(Radical & Voyelle_1 & Consonnes_1 & Voyelle_2)
        If (InStr(1, MoT, "æ") <> 0) Then
            MoT = Left(MoT, InStr(1, MoT, "æ") - 1) & "ae" & Right(MoT, Len(MoT) - InStr(1, MoT, "æ"))
        ElseIf (InStr(1, MoT, "œ") <> 0) Then
            MoT = Left(MoT, InStr(1, MoT, "œ") - 1) & "oe" & Right(MoT, Len(MoT) - InStr(1, MoT, "æ"))
        End If
        '
        '   aiguillage principal
        '
        If Suffixe = "que" Then ' cas particulier du "-que" final
            type_Que()
        ElseIf (Voyelle_2 = "æ") Or (Voyelle_2 = "œ") Or (Voyelle_2 = "Æ") Or (Voyelle_2 = "Œ") Or Len(Voyelle_2) = 2 Then  ' voyelle double longue, donc accentuée
            Penultieme()
        ElseIf (Consonnes_2 = "") Or (Consonnes_2 = "f") Or (Consonnes_2 = "h") Then
            diphtongue()
            'UPGRADE_WARNING: Couldn't resolve default property of object Nombre_Consonne(Consonnes_2). Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        ElseIf Nombre_Consonne(Consonnes_2) > 1 Then  ' plusieurs consonnes
            deuxconsonnes()
        ElseIf Voyelle_2 = "y" Then
            type_Y()
        ElseIf Voyelle_2 = "a" Then
            type_A()
        ElseIf Consonnes_2 = "b" Then
            type_B()
        ElseIf Consonnes_2 = "c" Then
            type_C()
        ElseIf Consonnes_2 = "d" Then
            type_D()
        ElseIf Consonnes_2 = "g" Then
            type_G()
        ElseIf Consonnes_2 = "gu" Then
            type_Gu()
        ElseIf Consonnes_2 = "j" Then
            type_J()
        ElseIf Consonnes_2 = "l" Then
            type_L()
        ElseIf Consonnes_2 = "m" Then
            type_M()
        ElseIf Consonnes_2 = "n" Then
            type_N()
        ElseIf Consonnes_2 = "p" Then
            type_P()
        ElseIf Consonnes_2 = "qu" Then
            type_Q()
        ElseIf Consonnes_2 = "r" Then
            Type_R()
        ElseIf Consonnes_2 = "s" Then
            Type_S()
        ElseIf (Consonnes_2 = "t") Or (Consonnes_2 = "th") Then
            Type_T()
        ElseIf Consonnes_2 = "v" Then
            Type_V()
        ElseIf (Consonnes_2 = "x") Or (Consonnes_2 = "z") Then
            Penultieme()
        ElseIf Voyelle_2 = "au" Then
            Penultieme()
        Else
            Cas_Exotique()
        End If
    End Sub

    Private Shared Sub diphtongue()
        Dim pref As String 'aæeëioœuyáéíóúýÁÉËÍÓÚÝÆŒ
        ' Pas de consonne avant la dernière syllabe => Normalement, accentuée
        'UPGRADE_WARNING: Couldn't resolve default property of object pref. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        pref = LCase(Radical & Voyelle_1 & Consonnes_1)
        If (MoT = "abi") And (Suffixe <> "ens") And (Suffixe <> "i") And (Suffixe <> "it") Or (MoT = "adona") Or (MoT = "agoni") Or (MoT = "alap") Or (MoT = "anani") Or (MoT = "andre") Or (MoT = "antiochi") Or (MoT = "archela") Or (MoT = "azari") Or (MoT = "barachi") Or (MoT = "basili") Or (MoT = "bersabe") Or (MoT = "bravi") Or (MoT = "caesare") Or (MoT = "cynomi") Or (MoT = "dari") Or (MoT = "ead") Or (MoT = "eli") Or (MoT = "elise") Or (MoT = "extas") Or (MoT = "extrah") Or (MoT = "ezechi") Then
            Penultieme()
        ElseIf (MoT = "helci") Or (MoT = "idumae") Or (MoT = "illi") Or (MoT = "ipsi") Or (MoT = "isti") Or (MoT = "isai") Or (MoT = "jechoni") Or (MoT = "jeremi") Or (MoT = "josi") Or (MoT = "judae") Or (MoT = "latri") Or (MoT = "liquefi") Or (MoT = "mari") And (Radical = "M") Or (MoT = "matthi") Or (MoT = "messi") Or (MoT = "nehemi") Or (MoT = "nicola") Or (MoT = "nulli") Or (MoT = "organ") Or (MoT = "orphan") Or (MoT = "ozi") Or (MoT = "plate") Or (MoT = "propheti") Then
            Penultieme()
        ElseIf (MoT = "samari") Or (MoT = "stanisla") Or (MoT = "tobi") Or ((MoT = "uni") And (Suffixe = "us")) Or (MoT = "uri") Or ((MoT = "soli") And (Suffixe = "us")) Or (MoT = "wencesla") Or (MoT = "zachari") Then
            Penultieme()
            ' quelques groupes de trois voyelles qui s'accentuent sur la première :
            'UPGRADE_WARNING: Couldn't resolve default property of object pref. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        ElseIf (pref = "allelu") Or (pref = "intro") Or (pref = "intu") Then
            AntePenultieme()
        ElseIf Consonnes_1 = "" Then  '   trois voyelles d'affilée
            Penultieme()
            Cas_Général()
        Else
            AntePenultieme()
            Cas_Général()
        End If
    End Sub
    Private Shared Sub deuxconsonnes()
        Dim coulante As String
        Dim explosive As String
        'UPGRADE_WARNING: Couldn't resolve default property of object explosive. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        explosive = LCase(Mid(Consonnes_2, 1, 1))
        'UPGRADE_WARNING: Couldn't resolve default property of object coulante. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        coulante = LCase(Mid(Consonnes_2, 2, 1))
        MoT = MoT & Consonnes_2
        '   Exception des exceptions :
        If (MoT = "innosc") Or (MoT = "idololatr") Or (MoT = "voluvr") Then
            AntePenultieme()
        ElseIf (MoT = "simulacr") Or (MoT = "candelabr") Or (MoT = "salubr") Or (MoT = "lavacr") Or (Right(MoT, 3) = "atr") Then
            Penultieme()
            '   L'association explosive + coulante compte pour une seule consonne :
            'UPGRADE_WARNING: Couldn't resolve default property of object coulante. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            'UPGRADE_WARNING: Couldn't resolve default property of object explosive. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        ElseIf Len(Consonnes_2) = 2 And (explosive = "b" Or explosive = "c" Or explosive = "d" Or explosive = "g" Or explosive = "p" Or explosive = "t") And (coulante = "l" Or coulante = "r") Then
            AntePenultieme()
            Cas_Général()
        Else
            Penultieme()
            Cas_Général()
        End If
    End Sub
    Private Shared Sub type_A()
        '   Le "a" en avant-dernière syllabe est normalement long, donc accentué.
        ' série baptismat,charismat,
        MoT = LCase(Radical & Voyelle_1 & Consonnes_1 & Voyelle_2 & Consonnes_2)
        If Right(MoT, 5) = "ismat" Or ((Consonnes_2 = "g") And (MoT <> "imag")) Then
            AntePenultieme()
        ElseIf (MoT = "aar") Or (MoT = "abac") Or (MoT = "abac") Or (MoT = "aegyptiac") Or (MoT = "aenigmat") Or (MoT = "agath") Or (MoT = "alap") Or (MoT = "aminad") Or (MoT = "amal") Or (MoT = "arab") Or (MoT = "aromat") Or (MoT = "athanat") Or (MoT = "balsam") Or (MoT = "barbar") Or (MoT = "barnab") Or (MoT = "barsab") Or (MoT = "benjam") Then
            AntePenultieme()
        ElseIf (MoT = "baptismat") Or (MoT = "beneplac") Or (MoT = "caesar") Or (MoT = "calam") Or (MoT = "charismat") Or (MoT = "chrismat") Or (MoT = "cithar") Or ((MoT = "circumdab") And (Suffixe <> "unt")) Or (MoT = "circumdat") Then
            AntePenultieme()
        ElseIf (MoT = "cliban") Or (MoT = "colaph") Or (MoT = "cymbal") Or (MoT = "cyriac") Or (MoT = "damar") Or (MoT = "damas") Or (MoT = "didac") Or (MoT = "deipar") Or (MoT = "diademat") Or (MoT = "eliac") Or (MoT = "elisab") Or (MoT = "ephrat") Or (MoT = "epimach") Or (MoT = "extas") Then
            AntePenultieme()
        ElseIf (MoT = "gabbath") Or (MoT = "galgal") Or (MoT = "genesar") Or (MoT = "gethseman") Or (MoT = "habac") Or (Right(MoT, 5) = "hilar") Or (MoT = "haceldam") Or (MoT = "hebdomad") Or (MoT = "herodiad") Or (MoT = "joach") Or (MoT = "joak") Or (MoT = "joath") Or (MoT = "jonath") Or (MoT = "josaph") Or (MoT = "jerusal") Or (MoT = "lampad") Or (MoT = "lazar") Or (MoT = "liban") Or (MoT = "manach") Or (MoT = "monach") Or (MoT = "melchiad") Then
            AntePenultieme()
        ElseIf (MoT = "naam") Or (MoT = "naham") Or (MoT = "nazar") Or (MoT = "nephtal") Or (MoT = "orfan") Or (MoT = "organ") Or (MoT = "orphan") Or (MoT = "pelag") Or (MoT = "perag") Or (MoT = "perman") Or (MoT = "phial") Or (MoT = "platan") Or (MoT = "praepar") Or (MoT = "repar") Then
            AntePenultieme()
        ElseIf (MoT = "sabbat") Or (MoT = "salman") Or (MoT = "satan") Or (MoT = "separ") Or (MoT = "seraph") Or (MoT = "scandal") Or (MoT = "sisar") Or (MoT = "smigmat") Or (MoT = "stephan") Or (MoT = "stigmat") Or (MoT = "tartar") Or (MoT = "thalam") Or (MoT = "thympan") Or (MoT = "tiberiad") Or (MoT = "tympan") Or (MoT = "venumdar") Or (MoT = "verumtam") Or (MoT = "zorobab") Then
            AntePenultieme()
        Else
            Penultieme()
            Cas_Général()
        End If
    End Sub
    Private Shared Sub type_B()
        '   La voyelle qui précède un "b" est généralement longue.
        '
        If Suffixe = "unt" Then
            Penultieme()
            Cas_Général()
        ElseIf (MoT = "adhi") Or (MoT = "ara") Or (MoT = "barna") Or (MoT = "barsa") Or (MoT = "beelze") Or (MoT = "cheru") Or (MoT = "circumda") Or (MoT = "fideli") Or (MoT = "perhi") Or (MoT = "prohi") Or (MoT = "repro") Or (MoT = "tribu") Or (MoT = "zoroba") Then
            AntePenultieme()
        ElseIf (Voyelle_2 & Consonnes_2 & Suffixe = "ibus") Then
            AntePenultieme()
            Cas_Général()
        Else
            Penultieme()
            Cas_Général()
        End If
    End Sub
    Private Shared Sub type_C()
        Dim Deux_Dernieres As String
        ' série des féminins en -trix, -trice : cantatri, genetri,extri,matri,obstetri, peccatri...
        'UPGRADE_WARNING: Couldn't resolve default property of object Deux_Dernieres. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        Deux_Dernieres = Right(MoT, 2)
        If (Right(MoT, 3) = "tri") Then
            Penultieme()
            Cas_Général()
        ElseIf Voyelle_2 = "a" Then
            type_A() '    généralement pénultième, quelques exceptions centralisées sur "A"
            '   Les radicaux en "EC" et "UC" sont plutôt pénultièmes,
            'UPGRADE_WARNING: Couldn't resolve default property of object Deux_Dernieres. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        ElseIf (MoT = "depre") Or (Voyelle_1 & Consonnes_1 & Voyelle_2 = "inse") Or (Deux_Dernieres + Consonnes_2 + Suffixe = "decim") Then
            AntePenultieme()
        ElseIf (Voyelle_2 = "e") Or (Voyelle_2 = "u") Then
            Penultieme()
            Cas_Général()
            '   Les radicaux en "IC" et "OC" sont plutôt antépénultièmes,
            '   mais beaucoup d'exceptions
            ' gag : indico, as (indiquer)= vs ind*ico, is (notifier)
        ElseIf (MoT = "ami") Or (MoT = "benedi") Or (MoT = "cervi") Or ((MoT = "collo") And (Suffixe <> "et")) Or (MoT = "contradi") Or (MoT = "coturni") Or (MoT = "dispi") Or (MoT = "evi") Or (MoT = "feli") Or (MoT = "foeni") Or (MoT = "fœni") Or (MoT = "henri") Or ((MoT = "indi") And (Left(Suffixe, 1) <> "a")) Or (MoT = "inimi") Or (MoT = "lori") Or (MoT = "ludovi") Or ((MoT = "maledi") And Not (Finale_A(Suffixe) Or Finale_US(Suffixe))) Then  ' maledicus, a, um = médisant, vs maled*ico, as, are = outrager
            Penultieme()
        ElseIf (MoT = "mendi") Or (MoT = "myri") Or (MoT = "posti") Or (MoT = "proi") Or (MoT = "pudi") Or ((MoT = "praedi") And (Left(Suffixe, 1) <> "a")) Or (MoT = "radi") Or (MoT = "umbili") Or (MoT = "velo") Or (MoT = "vesi") Then
            Penultieme()
            ' quelques séries remarquables (NB : les exceptions sont déjà traitées)
            'UPGRADE_WARNING: Couldn't resolve default property of object Deux_Dernieres. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        ElseIf (Deux_Dernieres = "fi") Or (Deux_Dernieres = "li") Or (Deux_Dernieres = "ni") Or (Deux_Dernieres = "ti") Or (Voyelle_2 = "o") Then  '
            AntePenultieme() ' æ
            Cas_Général()
            '   En principe le reste est antepénultième, mais mieux vaut confirmer dans le cas des -ic-
        ElseIf (MoT = "afri") Or (MoT = "api") Or (MoT = "aspi") Then
            AntePenultieme() ' æ
        ElseIf (MoT = "conspi") Or (MoT = "dedi") Or (MoT = "depre") Or (MoT = "despi") Or (MoT = "didi") Or (MoT = "dijudi") Or (MoT = "dimi") Then
            AntePenultieme() ' æ
        ElseIf (MoT = "ecclesiasti") Or (MoT = "eji") Or (MoT = "excae") Or (MoT = "haereti") Or (MoT = "hebrai") Or (MoT = "hydropi") Or (MoT = "indi") Or (MoT = "inspi") Then
            AntePenultieme()
        ElseIf (MoT = "invi") Or (MoT = "indi") Or (MoT = "judai") Or (MoT = "judi") Or (MoT = "lai") Or (MoT = "lubri") Then
            AntePenultieme()
        ElseIf (MoT = "maledi") Or (MoT = "medi") Or (MoT = "miseri") Or (MoT = "modi") Or (MoT = "musi") Or (MoT = "nervi") Or (MoT = "obji") Then
            AntePenultieme()
        ElseIf (MoT = "praedi") Or (MoT = "probati") Or (MoT = "prospi") Or (MoT = "proji") Then
            AntePenultieme()
        ElseIf (MoT = "respi") Or (MoT = "seraphi") Or (MoT = "subji") Or (MoT = "suffi") Or (MoT = "vindi") Then
            AntePenultieme()
        Else
            AntePenultieme()
            Cas_Douteux()
        End If
    End Sub
    Private Shared Sub type_D()
        If Voyelle_2 = "a" Then
            type_A() '
        ElseIf (MoT = "eru") Then  ' erudit
            AntePenultieme() ' æ
        ElseIf Voyelle_2 = "u" Then
            Penultieme()
            Cas_Général()
            '   Les radicaux en "ED", "ID" et "OD" sont plutôt antépénultièmes,
            '   mais beaucoup d'exceptions
        ElseIf (MoT = "come") Then
            Conjuguer_3()
        ElseIf (MoT = "exci") Then
            Penultieme() '
            Cas_Douteux() ' excido, is = tomber ; exc*ido, is = couper
        ElseIf (MoT = "absce") Or (MoT = "absci") Or (MoT = "acce") Or (MoT = "adli") Or (MoT = "alli") Or (MoT = "circumci") Or (MoT = "circumfo") Or (MoT = "cohere") Or (MoT = "conce") Or (MoT = "conci") Or (MoT = "confi") Or (MoT = "conli") Then
            Penultieme() ' æ
        ElseIf (MoT = "corro") Or (MoT = "conse") Or (MoT = "cui") Or (MoT = "custo") Or (MoT = "davi") Or (MoT = "disce") Or (MoT = "dulce") Or (MoT = "effo") Or (MoT = "ei") Or (MoT = "eli") Or (MoT = "eo") Or (MoT = "exau") Then
            Penultieme() ' æ
        ElseIf (MoT = "exce") Or (MoT = "formi") Or (MoT = "here") Or (MoT = "hero") Or (MoT = "homici") Or (MoT = "ibi") Or (MoT = "ince") Or (MoT = "inri") Or (MoT = "interce") Or (MoT = "irri") Then
            Penultieme() ' Pb de *occidat (se coucher à l'occident) vs occ*idit (tuer)
        ElseIf (MoT = "merce") Or (MoT = "nicome") Or (MoT = "obse") Or ((MoT = "occi") And (Left(Suffixe, 1) <> "a")) Or (MoT = "posse") Or (MoT = "praece") Or (MoT = "praxe") Or (MoT = "proce") Or (MoT = "putre") Or (MoT = "rece") Or (MoT = "rese") Or (MoT = "succe") Or (MoT = "succi") Or (MoT = "truci") Then
            Penultieme() ' æ
        ElseIf (MoT = "abi") Or (MoT = "acci") Or (MoT = "accommo") Or (MoT = "accomo") Or (MoT = "ace") Or (MoT = "adonised") Or (MoT = "amo") Or (MoT = "antece") Or (MoT = "ari") Or (MoT = "aro") Or (MoT = "aspi") Or (MoT = "asse") Or (MoT = "basili") Or (MoT = "bene") Or (MoT = "bethsai") Or (MoT = "cali") Or (MoT = "calli") Or (MoT = "candi") Or (MoT = "ceci") Or (MoT = "chanaaniti") Or (MoT = "chlamy") Then
            AntePenultieme()
        ElseIf (MoT = "chytropo") Or (MoT = "circumde") Or (MoT = "collyri") Or (MoT = "commo") Or (MoT = "credi") Or (MoT = "cupi") Or (MoT = "davi") Or (MoT = "deci") Or (MoT = "deploi") Or (MoT = "diploi") Or (MoT = "disperdi") Or (MoT = "divi") Or (MoT = "dummo") Or (MoT = "edi") Then
            AntePenultieme() ' æ
        ElseIf (MoT = "egre") Or (MoT = "elio") Or (MoT = "elmo") Or (MoT = "eluci") Or (MoT = "equi") Or (MoT = "exci") Or (MoT = "expe") Or (MoT = "fervi") Or (MoT = "frigi") Or (MoT = "haere") Or (MoT = "here") Or (MoT = "hispi") Or (MoT = "hujuscemo") Or (MoT = "hujusmo") Then
            AntePenultieme() ' æ
        ElseIf (MoT = "inci") Or (MoT = "info") Or (MoT = "ingre") Or (MoT = "intro") Or (MoT = "invali") Or (MoT = "invi") Or (MoT = "istiusmo") Or (MoT = "jezraëliti") Or (MoT = "lapi") Or (MoT = "langui") Or (MoT = "luci") Or (MoT = "mace") Or (MoT = "madianiti") Or (MoT = "male") Or (MoT = "melchice") Or (MoT = "melchise") Or (MoT = "moabiti") Or (MoT = "multimo") Or (MoT = "obede") Or (MoT = "obsi") Or (MoT = "occi") Or (MoT = "oppi") Then
            AntePenultieme()
        ElseIf (MoT = "pavi") Or (MoT = "perdi") Or (MoT = "perfi") Or (MoT = "perfo") Or (MoT = "perisceli") Or (MoT = "placi") Or (MoT = "plendi") Or (MoT = "possi") Or (MoT = "praeci") Or (MoT = "praesi") Or (MoT = "proci") Or (MoT = "provi") Or (MoT = "quemadmo") Or (MoT = "quomo") Or (MoT = "raphi") Or (MoT = "reddi") Or (MoT = "regre") Or (MoT = "reddi") Or (MoT = "rigi") Then
            AntePenultieme()
        ElseIf (MoT = "semi") Or (MoT = "siqui") Or (MoT = "soli") Or (MoT = "solummo") Or (MoT = "sordi") Or (MoT = "splendi") Or (MoT = "subdi") Or (MoT = "sunamiti") Or (MoT = "superceci") Or (MoT = "tantummo") Or (MoT = "timi") Or (MoT = "toti") Or (MoT = "trachoniti") Or (MoT = "transfo") Or (MoT = "transgre") Or (MoT = "tradi") Or (MoT = "turbi") Or (MoT = "vali") Or (MoT = "vendi") Or (MoT = "viri") Or (MoT = "vivi") Then
            AntePenultieme()
        ElseIf (MoT = "suffo") Then
            Conjuguer_3()
        Else
            AntePenultieme()
            Cas_Douteux()
        End If
    End Sub
    Private Shared Sub type_G()
        ' Pb : cal-igo (verbe) vs c-aligas (sandales) ...
        If (MoT = "aeru") Or (MoT = "affli") Or (MoT = "areopa") Or (MoT = "cali") And (Suffixe <> "as") Or (MoT = "casti") Or (MoT = "confi") Or (MoT = "confre") Or (MoT = "confu") Or (MoT = "crucifi") Or (MoT = "effu") Or (MoT = "ele") Or (MoT = "hedwi") Or (MoT = "infi") Or (MoT = "ori") Or (MoT = "pere") Or (MoT = "profu") Or (MoT = "quadri") Or (MoT = "rede") Or (Right(MoT, 6) = "synago") Or (MoT = "transfi") Then
            Penultieme()
        Else
            AntePenultieme()
            Cas_Général()
        End If
    End Sub
    Private Shared Sub type_J()
        ' Le j entre deux voyelles est une tri-phtongue déguisée. Exemple type : Alleluja
        Penultieme()
        Cas_Général()
    End Sub
    Private Shared Sub type_Gu()
        '   Configuration très rare (deux cas dans les psaumes)
        If (MoT = "ambi") Or (MoT = "exi") Or (MoT = "inri") Or (MoT = "irri") Then
            Penultieme()
        Else
            Penultieme()
            Cas_Douteux()
        End If
    End Sub
    Private Shared Sub type_L()
        '   La voyelle devant le L est généralement faible, => majoritairement antépénultième
        ' les exceptions sont majoritairement du type -a:le
        If Voyelle_2 = "a" Then
            type_A() '
        ElseIf (MoT = "cande") Or (MoT = "carme") Or (MoT = "cubi") Or (MoT = "danie") Or (MoT = "fide") Or (MoT = "gabrie") Or (MoT = "genti") Or (MoT = "hosti") Or (MoT = "ido") Or (MoT = "infe") Or (MoT = "infide") Or (MoT = "israe") Or (MoT = "israë") Or (MoT = "loque") Then
            Penultieme()
        ElseIf (MoT = "mede") Or (MoT = "ovi") Or (MoT = "pueri") Or (MoT = "quere") Or (MoT = "reve") Or (MoT = "seque") Or (MoT = "servi") Or (MoT = "simu") Or (MoT = "theodu") Or (MoT = "tute") Or (MoT = "viri") Then
            Penultieme()
        Else
            AntePenultieme()
            Cas_Général()
        End If
    End Sub
    Private Shared Sub type_M()
        If Voyelle_2 = "a" Then
            type_A() '    exception centralisées sur "A"
            ' cas des ..im.. généralement antépénultièmes
        ElseIf (MoT = "esuri") Or (MoT = "experi") Or (MoT = "muni") Or (MoT = "nesci") Or (MoT = "peri") Or (MoT = "possi") Or (MoT = "praeveni") Or (MoT = "senti") Or (MoT = "siti") Or (MoT = "subli") Or (MoT = "transi") Or (MoT = "veni") Then
            Penultieme()
        ElseIf Voyelle_2 = "i" Then
            AntePenultieme()
            Cas_Général()
        ElseIf Voyelle_2 = "y" Then
            AntePenultieme()
            Cas_Général()
        ElseIf (MoT = "adsu") Or (MoT = "anathe") Or (MoT = "chrysosto") Or (MoT = "hie") Or (MoT = "incolu") Or (MoT = "nolu") Or (MoT = "possu") Or (MoT = "quaesu") Or ((MoT = "salo") And (Suffixe = "on")) Or (MoT = "volu") Then
            AntePenultieme()
        Else ' série régulière des -emus, -imus, -umus...
            Penultieme()
            Cas_Général()
        End If
    End Sub
    Private Shared Sub type_N()
        Dim terminaison As String
        'UPGRADE_WARNING: Couldn't resolve default property of object terminaison. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        terminaison = Voyelle_2 & "n" & Left(Suffixe, 1)
        If Voyelle_2 = "a" Then
            type_A() '    quelques exceptions centralisées sur "A"
        ElseIf (MoT = "areu") Or (MoT = "chrysogo") Or (MoT = "conso") Or (MoT = "corbo") Or (MoT = "daemo") Or (MoT = "diaco") Or (MoT = "inso") Or (MoT = "sindo") Or (Voyelle_2 = "y") Then
            AntePenultieme()
        ElseIf (Voyelle_2 = "o") Or (Voyelle_2 = "u") Then
            Penultieme()
            Cas_Général()
            '   Pb avec *advenas (nom?) vs adv*enas (verbe)...
        ElseIf (MoT = "adve") And Finale_A(Suffixe) Then
            AntePenultieme()
        ElseIf (Voyelle_2 = "e") And (Right(Consonnes_1, 1) = "v") And (MoT <> "juve") Then
            Conjuguer_4() ' famille des composés de "venire"
            '   Les radicaux en "EN", "IN" sont plutôt antépénultièmes,
            '   mais beaucoup d'exceptions suivant la racine
        ElseIf (Right(MoT, 6) = "tricli") Then
            Penultieme()
        ElseIf (MoT = "abili") Or (MoT = "accli") Or (MoT = "acrabatte") Or (MoT = "aggare") Or (MoT = "agare") Or (MoT = "alie") Or (MoT = "antoni") Or (MoT = "are") Or (MoT = "areu") Or (MoT = "arvi") Or (MoT = "augusti") Or (MoT = "bernardi") Or (MoT = "caelesti") Or (MoT = "cami") Or (MoT = "capri") Or (MoT = "cate") Or (MoT = "cathari") Or (MoT = "cente") Or (MoT = "christi") Then
            Penultieme()
        ElseIf (MoT = "cyre") Or (MoT = "cyri") Or (MoT = "concubi") Or (MoT = "consobri") Or (MoT = "corti") Or (MoT = "damasce") Or (MoT = "dece") Or (MoT = "decli") Or (MoT = "dereli") Or (MoT = "discipli") Or (MoT = "divi") Or (MoT = "doctri") Or (MoT = "duode") Or (MoT = "ege") Or (MoT = "egne") Or (MoT = "fari") Or (MoT = "fausti") Or (MoT = "festi") Or (MoT = "galli") Or (MoT = "gorti") Or (MoT = "hare") Or (MoT = "hygi") Then
            Penultieme()
        ElseIf (MoT = "incli") Or (MoT = "intesti") Or (MoT = "justi") Or (MoT = "jorda") Or (MoT = "lage") Or (MoT = "lagoe") Or (MoT = "lagœ") Or (MoT = "lati") Or (MoT = "latri") Or (MoT = "magdale") Or (MoT = "marcelli") Or (MoT = "mari") Or (MoT = "marti") Or (MoT = "masculi") Or (MoT = "matuti") Or (MoT = "medici") Or (MoT = "mille") Or (MoT = "mortici") Or (MoT = "nazare") Or (MoT = "omni") Or (MoT = "pate") Or (MoT = "pauli") Or (MoT = "peregri") Then
            Penultieme()
        ElseIf (MoT = "pisci") Or (MoT = "porci") Or (MoT = "prui") Or (MoT = "quatequingente") Or (MoT = "quinquage") Or (MoT = "rapi") Or (MoT = "refre") Or (MoT = "regi") Or (MoT = "reli") Or (MoT = "repenti") Or (MoT = "rui") Or (MoT = "sabi") Or (MoT = "sage") Or (MoT = "saturni") Or (MoT = "septe") Or (MoT = "sere") Or (MoT = "superve") Or (MoT = "terre") Or (MoT = "uri") Or (MoT = "vagi") Or (MoT = "valenti") Or (MoT = "vene") Or (MoT = "vesperti") Or (MoT = "vici") Or (MoT = "zephyri") Then
            Penultieme()
            '   Quelques terminaisons grammaticales à voyelle faible
            '   aæeëioœuyáéíóúýÁÉËÍÓÚÝÆŒ
            'UPGRADE_WARNING: Couldn't resolve default property of object terminaison. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        ElseIf (terminaison = "ine") Or (terminaison = "ini") Or (terminaison = "ino") Or (terminaison = "inu") Then
            AntePenultieme()
            Cas_Général()
        ElseIf (MoT = "adve") Or (MoT = "agmi") Or (MoT = "alienige") Or (MoT = "amygdali") Or (MoT = "ase") Or (MoT = "asi") Or (MoT = "bucci") Or (MoT = "byssi") Or (MoT = "cacumi") Or (MoT = "cai") Or (MoT = "carmi") Or (MoT = "catechume") Or (MoT = "cedri") Or (MoT = "certami") Or (MoT = "cilici") Or (MoT = "crasti") Or (MoT = "crimi") Or (MoT = "desi") Or (MoT = "discrimi") Or (MoT = "domi") Or (MoT = "elimi") Or (MoT = "ete") Or (MoT = "evagi") Or (MoT = "eve") Then
            AntePenultieme()
        ElseIf (MoT = "femi") Or (MoT = "flumi") Or (MoT = "genimi") Or (MoT = "germi") Or (MoT = "grami") Or (MoT = "hele") Or (MoT = "hyacinthi") Or (MoT = "illumi") Or (MoT = "indige") Or (Right(MoT, 5) = "inqui") Or (MoT = "instrume") Or (MoT = "janthi") Or (MoT = "juve") Or (MoT = "lami") Or (MoT = "leae") Or (MoT = "libami") Or (MoT = "machi") Or (MoT = "medeme") Or (MoT = "nullate") Or (MoT = "nomi") Or (MoT = "ordi") Then
            AntePenultieme()
        ElseIf (MoT = "perti") Or (MoT = "praeve") Or (MoT = "pristi") Or (MoT = "quate") Or (MoT = "recte") Or (MoT = "resi") Or (MoT = "rumi") Or (MoT = "sarci") Or (MoT = "semi") Or (MoT = "seroti") Or (Right(MoT, 5) = "termi") Or (MoT = "terrigi") Or (MoT = "terrige") Or (MoT = "trie") Or (MoT = "ubi") Or (MoT = "uti") Then
            AntePenultieme()
        ElseIf (Right(MoT, 2) = "ge") Then
            Penultieme()
        Else
            AntePenultieme()
            Cas_Douteux()
        End If
    End Sub
    Private Shared Sub type_P()
        Dim racine As String
        '   Majoritairement voyelle longue devant le P
        'UPGRADE_WARNING: Couldn't resolve default property of object racine. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        racine = Right(Consonnes_1, 1) & Voyelle_2
        ' cas des zz-cepit et des zz-rupit
        'UPGRADE_WARNING: Couldn't resolve default property of object racine. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        If (racine = "ce") Or (racine = "ru") Or (MoT = "hyso") Or (MoT = "hysso") Or (MoT = "sina") Or (MoT = "subre") Then
            Penultieme()
        Else
            AntePenultieme()
            Cas_Général()
        End If
    End Sub
    Private Shared Sub type_Q()
        '   Le Q est toujours suivi de U, qui fonctionne comme une semi-voyelle et est toujours
        '   suivi par une voyelle.
        '   Les mots tendent donc à être pénultième.
        If (MoT = "ali") Or (MoT = "ante") Or (MoT = "asse") Or (MoT = "conse") Or (MoT = "elo") Or (MoT = "exse") Or (MoT = "usque") Or (MoT = "magnilo") Or (MoT = "perse") Or ((MoT = "reli") And (Suffixe <> "it") And (Suffixe <> "i")) Or (MoT = "sili") Or (MoT = "subse") Or (MoT = "usque") Then
            AntePenultieme()
            ' relinquo, is, ere, rel*iqui, relictum (laisser) se fonfond au parfait avec
            ' reliquus, a, um : ce qui reste
        ElseIf ((MoT = "reli") And (Suffixe = "i")) Then
            Penultieme()
            Cas_Douteux()
        Else
            Penultieme()
            Cas_Général()
        End If
    End Sub
    Private Shared Sub type_Que()
        '   Le -que signifiant "avec" impose l'accentuation, mais ce n'est pas la seule forme.
        If (MoT = "deni") Or (MoT = "ita") Or (MoT = "undi") Or (MoT = "uti") Then
            AntePenultieme()
        Else
            Penultieme()
            Cas_Général()
        End If
    End Sub
    Private Shared Sub Type_R()
        Dim fin As String
        'UPGRADE_WARNING: Couldn't resolve default property of object fin. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        fin = Left(Suffixe, 1)
        If Voyelle_2 = "a" Then
            type_A() '    quelques exceptions centralisées sur "A"
            ' généralement les -ir, -or, -ur,  -yr, sont accentués, mais il y a quelques exceptions :
        ElseIf ((MoT = "affe") Or (MoT = "dese") Or (MoT = "offe") Or (MoT = "pote") Or (MoT = "prode") Or (MoT = "refe")) And (Suffixe = "unt") Then
            AntePenultieme()
        ElseIf (MoT = "ege") And (Suffixe = "e") Then
            Penultieme()
            Cas_Douteux()
            ' confusion possible entre egeo, es, eg*ere (manquer de) & *egero, is, *egere (évacuer)
        ElseIf (MoT = "apostolo") Or (MoT = "arbo") Or (MoT = "christopho") Or (MoT = "corpo") Or (MoT = "dedeco") Or (MoT = "devo") Or (MoT = "esu") Or (MoT = "ege") Or (MoT = "facino") Or (MoT = "femo") Or (MoT = "fulgu") Or (MoT = "frigo") Or (MoT = "guttu") Or (MoT = "instau") Or (MoT = "litto") Or (MoT = "loque") Then
            AntePenultieme()
        ElseIf (MoT = "memo") Or (MoT = "nabo") Or (MoT = "nyctico") Or (MoT = "offe") Or (MoT = "partu") Or (MoT = "peco") Or (MoT = "pecto") Or (MoT = "pigno") Or (MoT = "purpu") Or (MoT = "restau") Or (MoT = "robo") Or (MoT = "sterco") Or (MoT = "sycomo") Or (MoT = "telespho") Or (MoT = "tempo") Or (MoT = "thesau") Or (MoT = "turtu") Then
            AntePenultieme()
        ElseIf (Voyelle_2 = "au") Or (Voyelle_2 = "i") Or (Voyelle_2 = "o") Or (Voyelle_2 = "u") Or (Voyelle_2 = "y") Or (Suffixe = "unt") Then
            Penultieme()
            Cas_Général()
            '   Restent les mots en -ER- hors -érunt  æ
        ElseIf (MoT = "abole") Or (MoT = "abstine") Or (MoT = "adhae") Or (MoT = "adhaere") Or (MoT = "adhere") Or (MoT = "adhibe") Or (MoT = "adimple") Or (MoT = "amove") Or (MoT = "auste") Or (MoT = "confite") Or (MoT = "commisce") Or (MoT = "commove") Or (MoT = "comple") Or (MoT = "condole") Or (MoT = "confite") Or (MoT = "conflixe") Or (MoT = "contorque") Or (MoT = "dele") Or (MoT = "delecte") Or (MoT = "die") Then
            Penultieme()
        ElseIf (MoT = "digne") Or (MoT = "doce") Or (MoT = "dole") Or (MoT = "egredere") Or (MoT = "egredie") Or (MoT = "elonge") Or (MoT = "exerce") Or (MoT = "exhibe") Or (MoT = "fove") Or (MoT = "fure") Or (MoT = "gaude") Or (MoT = "gradie") Or (MoT = "habe") Or (MoT = "imple") Or (MoT = "indulge") Or (MoT = "inhaere") Or (MoT = "innotesce") Or (MoT = "intue") Or (MoT = "justifice") Then
            Penultieme()
        ElseIf (MoT = "laude") Or (MoT = "lice") Or (MoT = "loque") Or (MoT = "luce") Or (MoT = "luge") Or (MoT = "maligne") Or (MoT = "mane") Or (MoT = "mede") Or (MoT = "mire") Or (MoT = "misere") Or (MoT = "more") Or (MoT = "morie") Or (MoT = "move") Or (MoT = "noce") Or (MoT = "obtine") Then
            Penultieme()
        ElseIf ((MoT = "pasce") And (Left(Suffixe, 1) <> "e")) Or (MoT = "pate") Or (MoT = "pave") Or (MoT = "perhibe") Or (MoT = "permane") Or (MoT = "perseve") Or (MoT = "pertine") Or (MoT = "pertransie") Or (MoT = "perverte") Or (MoT = "place") Or (MoT = "posside") Or (MoT = "praebe") Or (MoT = "prohibe") Or (MoT = "promere") Or (MoT = "promove") Or (MoT = "propitie") Or (MoT = "provide") Then
            Penultieme()
            'UPGRADE_WARNING: Couldn't resolve default property of object fin. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        ElseIf (MoT = "remane") Or (MoT = "reple") Or (MoT = "responde") Or (MoT = "retine") Or (MoT = "reverte") Or ((MoT = "sede") And (Suffixe <> "it")) Or (MoT = "since") Or (MoT = "sote") Or (MoT = "state") Or (MoT = "subjace") Or (MoT = "sustine") Or (MoT = "tace") Or (MoT = "taede") Or ((MoT = "tene") And ((fin = "e") Or (fin = "u"))) Or (MoT = "tente") Or (MoT = "terre") Or (MoT = "time") Or (MoT = "tue") Or (MoT = "unive") Or ((MoT = "vide") And ((fin = "e") Or (fin = "u"))) Or (MoT = "vige") Then  ' PB : Ps 12 = Usquequo obliviscéris, Ps 43 Quare oblivísceris
            Penultieme()
        Else 'très majoritairement:
            AntePenultieme()
            Cas_Général()
        End If
    End Sub
    Private Shared Sub Type_S()
        ' rares exceptions : Moïse, eleison, haereses, damasum
        If MoT = "dama" Or MoT = "duodenae" Or MoT = "elei" Or MoT = "haere" Or MoT = "hypocri" Or MoT = "moy" Then
            AntePenultieme()
        Else
            Penultieme()
            Cas_Général()
        End If
    End Sub
    Private Shared Sub Type_T()
        Dim finale As String
        Dim semi_finale As String
        'UPGRADE_WARNING: Couldn't resolve default property of object semi_finale. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        semi_finale = LCase(Voyelle_1 & Consonnes_1 & Voyelle_2)
        'UPGRADE_WARNING: Couldn't resolve default property of object finale. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        finale = LCase(Voyelle_2 & "t" & Suffixe)
        '
        '   -AT-
        '
        If Voyelle_2 = "a" Then
            type_A()
            '
            '   -OT- ou -UT-
            '
        ElseIf (MoT = "ampu") Or (MoT = "compu") Or (MoT = "concu") Or (MoT = "depu") Or (MoT = "dispu") Or (MoT = "excu") Or (MoT = "golgo") Or (MoT = "lithostro") Or (MoT = "omnipo") Or (MoT = "percu") Or (MoT = "repu") Or (MoT = "sicu") Then
            AntePenultieme()
        ElseIf (Voyelle_2 = "o") Or (Voyelle_2 = "u") Then
            Penultieme()
            Cas_Général()
            '
            '   -ET-
            '
        ElseIf (MoT = "abie") Or (MoT = "arie") Or (MoT = "compe") Or (MoT = "expe") Or (MoT = "impe") Or (MoT = "parie") Or (MoT = "perpe") Or (MoT = "pie") Or (MoT = "proprie") Or (MoT = "sege") Or (MoT = "socie") Or (MoT = "suppe") Or (MoT = "vege") Then
            AntePenultieme()
        ElseIf (Voyelle_2 = "e") Then
            Penultieme()
            Cas_Général()
            '
            '   -IT-
            '
            ' exceptions aux finales majoritairement antépénultièmes
        ElseIf (MoT = "accersi") Or (MoT = "aelami") Or (MoT = "agapi") Or (MoT = "aperi") Or (MoT = "appeti") Or (MoT = "areopagi") Or (MoT = "attri") Or (MoT = "audi") Or (MoT = "blandi") Or (MoT = "cognosci") Or (MoT = "compedi") Or (MoT = "conpedi") Or (MoT = "consequi") Or (MoT = "conquisi") Or (MoT = "consenti") Or (MoT = "contri") Or (MoT = "custodi") Or (MoT = "demoli") Or (MoT = "descendi") Then
            Penultieme()
        ElseIf (MoT = "disperti") Or (MoT = "dormi") Or (MoT = "enutri") Or (MoT = "eremi") Or (MoT = "erudi") Or (MoT = "esuri") Or (MoT = "exaudi") Or ((MoT = "exi") And (Suffixe = "e")) Or (MoT = "exinani") Or (MoT = "expedi") Or (MoT = "expeti") Or (MoT = "exquisi") Or (MoT = "ezrai") Or (MoT = "fulci") Or (MoT = "hauri") Or (MoT = "igni") Or (MoT = "infini") Or (MoT = "insigni") Or ((MoT = "introi") And (Left(Suffixe, 1) <> "u")) Or (MoT = "inveni") Then
            Penultieme()
        ElseIf ((MoT = "irri") And (Suffixe = "at")) Or (MoT = "ismaheli") Or (MoT = "israëli") Or (MoT = "israeli") Or (MoT = "jovi") Or ((MoT = "largi") And ((Suffixe = "or") Or (Suffixe = "us"))) Or (MoT = "legisperi") Or (MoT = "levi") Or (MoT = "margari") Or (MoT = "menti") Or (MoT = "molli") Or (MoT = "muni") Or (MoT = "nesci") Or (MoT = "nigri") Or (MoT = "ninivi") Or (MoT = "noli") Or (MoT = "nutri") Or (MoT = "obaudi") Or (MoT = "obedi") Or (MoT = "obli") Or (MoT = "odi") Or (MoT = "operi") Then
            Penultieme()
        ElseIf (MoT = "parti") Or (MoT = "possi") Or (MoT = "praefini") Or (MoT = "propi") Or (MoT = "recensi") Or (MoT = "senti") Or ((MoT = "servi") And Not (Finale_US(Suffixe))) Or (MoT = "sorti") Or (MoT = "stabili") Or (MoT = "subsequi") Or (MoT = "subveni") Or (MoT = "sunami") Or (MoT = "thesbi") Or ((MoT = "transi") And Not (Finale_US(Suffixe))) Or (MoT = "veni") Or (MoT = "vesti") Then
            Penultieme()
            ' finales relativement standard
        Else
            AntePenultieme()
            Cas_Général()
        End If
    End Sub
    Private Shared Sub Type_V()
        ' attention : seuls les cinq derniers caractères sont testés
        MoT = Right(MoT, 5)
        If Voyelle_2 = "a" Then
            type_A()
        ElseIf (MoT = "adju") Then
            Conjuguer_1()
        ElseIf (MoT = "amo") Then
            Conjuguer_2()
            ' cas des finales en -iv-
        ElseIf (MoT = "nini") Then
            AntePenultieme()
        ElseIf (Voyelle_2 = "i") Then
            Penultieme()
            Cas_Général()
            ' finales en -ev-
            ' attention : seuls les cinq derniers caractères sont testés
        ElseIf (MoT = "omple") Or (MoT = "dele") Or (MoT = "exple") Or (MoT = "imple") Or (MoT = "quie") Or (MoT = "rasce") Or (MoT = "reple") Or (Consonnes_1 = "") Then
            Penultieme()
        ElseIf (Voyelle_2 = "e") Or (Voyelle_2 = "ae") Then
            AntePenultieme()
            Cas_Général()
            ' finales en -ov- ou -uv-
        ElseIf (MoT = "agno") Or (MoT = "amo") Or (MoT = "cogno") Or (Right(MoT, 4) = "tano") Then
            Penultieme()
        ElseIf (Voyelle_2 = "o") Or (Voyelle_2 = "u") Then
            AntePenultieme()
            Cas_Général()
        Else ' ???
            AntePenultieme()
            Cas_Douteux()
        End If
    End Sub
    Private Shared Sub type_Y()
        If (MoT = "aegy") Or (MoT = "aby") Or (MoT = "buty") Then
            Penultieme()
        Else
            AntePenultieme()
        End If
    End Sub
    Private Shared Sub Cas_Exotique()
        ' Récupération des combinaisons avec "H" et des explosives+liquide
        ' Généralement des noms hébreux (attention : TH traité avec T)
        MoT = MoT & Consonnes_2
        If (MoT = "achitoph") Or (MoT = "beelseph") Or (MoT = "cariathseph") Or (MoT = "caiph") Or (MoT = "cleoph") Or (MoT = "colaph") Or (MoT = "eliph") Or (MoT = "epimach") Or (MoT = "getheph") Or (MoT = "joach") Or (MoT = "jerich") Or (MoT = "josaph") Or (MoT = "masereph") Or (MoT = "monach") Or (MoT = "onych") Or (MoT = "putiph") Or (MoT = "ramathaimsoph") Or (MoT = "salech") Or (MoT = "seraph") Or (MoT = "ciniph") Or (MoT = "sciniph") Or (MoT = "syntych") Then
            AntePenultieme()
        ElseIf (MoT = "eunuch") Or (MoT = "joseph") Then
            Penultieme()
        Else
            AntePenultieme()
            Cas_Douteux()
        End If
    End Sub
    Private Shared Sub Conjuguer_1() ' type adjuv-o, -as, -are, adj*u-vi, -*u-tum
        If (Suffixe = "o") Or (Suffixe = "as") Or (Suffixe = "at") Or (Suffixe = "ant") Then 'forme présent
            AntePenultieme()
        ElseIf (Suffixe = "a") Then  'imperatif
            AntePenultieme()
        ElseIf (Suffixe = "em") Or (Suffixe = "es") Or (Suffixe = "et") Or (Suffixe = "ent") Then  'subjonctif présent
            AntePenultieme()
        ElseIf (Suffixe = "i") Or (Suffixe = "it") Then  'forme parfait
            Penultieme()
        Else 'forme ambigue probablement au parfait, mais...
            Penultieme()
            Cas_Douteux()
        End If
    End Sub
    Private Shared Sub Conjuguer_2() ' type amov-eo, -es, -ere, am*ov-i, am*ot-um
        If (Suffixe = "eo") Or (Suffixe = "es") Or (Suffixe = "et") Or (Suffixe = "ent") Then 'forme présent
            AntePenultieme()
        ElseIf (Suffixe = "e") Then  'imperatif
            AntePenultieme()
        ElseIf (Suffixe = "eam") Or (Suffixe = "eas") Or (Suffixe = "eat") Or (Suffixe = "eant") Then  'subjonctif présent
            AntePenultieme()
        ElseIf (Suffixe = "i") Or (Suffixe = "it") Then  'forme parfait
            Penultieme()
        Else 'forme ambigue probablement au parfait, mais...
            Penultieme()
            Cas_Douteux()
        End If
    End Sub
    Private Shared Sub Conjuguer_3() ' comed-o, -is, -ere, com*ed-i, com*es-um
        If (Suffixe = "o") Or (Suffixe = "is") Or (Suffixe = "unt") Then 'forme présent
            AntePenultieme()
        ElseIf (Suffixe = "e") Then  'imperatif
            AntePenultieme()
        ElseIf (Suffixe = "am") Or (Suffixe = "es") Or (Suffixe = "et") Or (Suffixe = "ent") Then  'forme future
            AntePenultieme()
        ElseIf (Suffixe = "am") Or (Suffixe = "as") Or (Suffixe = "at") Or (Suffixe = "ant") Then  'subjonctif présent
            AntePenultieme()
        ElseIf (Suffixe = "i") Then  'forme parfait
            Penultieme()
        Else ' -it = présent ou parfait
            Penultieme()
            Cas_Douteux()
        End If
    End Sub
    Private Shared Sub Conjuguer_4() ' type ad/ con/ prae/ -ven-io, -is, -ire, -v*en-i, -ven-tum
        If (Suffixe = "io") Or (Suffixe = "is") Or (Suffixe = "iunt") Then 'forme présent
            AntePenultieme()
        ElseIf (Suffixe = "iam") Or (Suffixe = "ies") Or (Suffixe = "iet") Or (Suffixe = "ient") Then  'forme future
            AntePenultieme()
        ElseIf (Suffixe = "iam") Or (Suffixe = "ias") Or (Suffixe = "iat") Or (Suffixe = "iant") Then  'subjonctif présent
            AntePenultieme()
        Else ' -it = présent ou parfait, i=impératif ou parfait
            Penultieme()
            Cas_Douteux()
        End If
    End Sub
    Private Shared Function Finale_US(ByRef finale As String) As Boolean
        'UPGRADE_WARNING: Couldn't resolve default property of object finale. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        If finale = "us" Or finale = "um" Or finale = "i" Or finale = "o" Or finale = "os" Then ' oubli volontaire du vocatif en "-e", trop rare et généralement forme verbale
            'UPGRADE_WARNING: Couldn't resolve default property of object Finale_US. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            Finale_US = True
        Else
            'UPGRADE_WARNING: Couldn't resolve default property of object Finale_US. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            Finale_US = False
        End If
    End Function
    Private Shared Function Finale_A(ByRef finale As String) As Boolean
        'UPGRADE_WARNING: Couldn't resolve default property of object finale. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
        If finale = "a" Or finale = "ae" Or finale = "am" Or finale = "as" Or finale = "is" Then ' Conjugaison type ROSA
            'UPGRADE_WARNING: Couldn't resolve default property of object Finale_A. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            Finale_A = True
        Else
            'UPGRADE_WARNING: Couldn't resolve default property of object Finale_A. Click for more: 'ms-help://MS.VSCC.2003/commoner/redir/redirect.htm?keyword="vbup1037"'
            Finale_A = False
        End If
    End Function
End Class
'End Namespace
