# ==============================================================================
# Cakefile utilizado para monitorar alterações nos arquivos Coffeescript 
# 
# Referencia: https://github.com/grifo/grifo-boilerplate/blob/master/Cakefile
# Author: Luís Dalmolin <luis@escape.ppg.br> 
# ============================================================================== 


# dependencias 
{exec} = require 'child_process'
fs     = require 'fs'

lastChange    = {}
global.coffee = []


# ============================================================================
# Coloque neste array todos os seus arquivos .coffee
# Na pasta `paginas/_js/`, as sub pastas PRECISAM ser criadas, por exemplo -> 
#     _js/paginas/coffee/produtos/
#     _js/paginas/js/produtos/
# 
# O resto é compilado pela task watch
# ============================================================================
coffee.push 'main'

# diretorios do coffee
coffee.src      = 'public/assets/js/coffee/'
coffee.dst      = 'public/assets/js/'
coffee.compress = true

head = "`date -u +'%Y-%m-%d %H:%M GMT'`"
tail = "
  created by Escape Criativação"

count = do ->
    num = 1;
    -> ('0000' + num++).slice(-4)

# compilando os arquivos .coffee
compile = 
    coffee: (file) ->
        coffeeFile = coffee.src + file + '.coffee'
        jsFile = coffee.dst + file + '.js'
        compress = if coffee.compress then '| uglifyjs' else ''
        exec """ 
            echo "/*
              #{coffeeFile} > #{jsFile}
              #{tail}
            */" > #{jsFile}
            coffee -c -p #{coffeeFile} #{compress} >> #{jsFile}
        """, (err, stdout, stderr) ->
            return console.error err if err
            console.log count() + " » Compiled #{coffeeFile}"

# olhando um arquivo .coffee para mudanças 
watch = (type, file, track) ->
    try
        name = global[type].src + track + '.' + type
        fs.watch name, (event) ->
            return if event isnt 'change'
            # ignore repeated event misfires
            return if Date.now() - (lastChange[file + type] || 0) < 1000
            compile[type] file
            lastChange[file + type] = Date.now()
    catch e
        console.log "Error watching #{name}"


# ====================================================================
# Tasks 
# ====================================================================

task 'build', 'Compile *.coffee', ->
    compile.coffee(file) for file in coffee

task 'watch', 'Compile + watch *.coffee', ->
    # coffee files 
    for file in coffee
        compile.coffee(file)
        watch 'coffee', file, file
        console.log " -> Watching Cofofe #{file}"