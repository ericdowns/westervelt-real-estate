# 🚀 Westervelt Git + Cloudways Deploy Cheat Sheet

## 🚪 SSH into Cloudways (Live Site Folder)

```bash
ssh master_amywraxgks@174.138.95.1 -t "cd /home/master/applications/nxuggywrqr/public_html && bash"
```

---

## 🚀 Push from Local to Cloudways

```bash
git add . && git commit -m "Update site" && git push cloudways main
```

> 🔹 Stages all changes, commits them, and pushes to Cloudways  
> 🔹 The `post-receive` hook auto-deploys to `public_html`

---

## 🔗 One-time Remote Setup (already done)

If needed again:

```bash
git remote add cloudways ssh://master_amywraxgks@174.138.95.1/home/master/repos/westervelt.git
```
