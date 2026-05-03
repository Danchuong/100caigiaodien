# Obsidian — Refero Style

- Refero URL: https://styles.refero.design/style/e793a53c-537e-46b0-881d-b15b63b9ff26
- Site URL: https://obsidian.md
- ID: e793a53c-537e-46b0-881d-b15b63b9ff26
- Theme: dark
- Industry: productivity
- Created: 2026-03-11T11:55:08.000Z
- Ranks: newest: 1056, popular: 223, trending: 523

> Crystalline Knowledge Vault. A sharp, faceted digital space built for clarity and focus, with glowing violet veins of interaction.

## Description

The design feels like being inside a piece of precision software—a dark, focused digital workspace where thoughts crystallize. The foundation is a near-black, void-like background (#171717), creating a high-contrast canvas. A single, electric violet accent (#7c3aed, #a78bfa) is used strictly for interactive elements like CTAs and links, acting as functional beacons in the dark. Typography is exclusively the system's native UI font, reinforcing its identity as a functional tool rather than a stylized marketing site. Instead of drop shadows, surfaces use a subtle, 1px white inset highlight, giving them an internal luminescence as if lit from within.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| White | #ffffff | neutral | Bright text on dark CTAs, inset glows for definition |
| Bright Gray | #eeeeee | neutral | Primary body text, headings |
| Medium Gray | #bcbcbc | neutral | Secondary text, navigation links |
| Muted Gray | #a3a3a3 | neutral | Tertiary text, subtle metadata |
| Graphite | #3f3f3f | neutral | Borders, UI element dividers |
| Surface | #1e1e1 | neutral | Card backgrounds, elevated UI panels |
| Abyss | #171717 | neutral | Main page background |
| Amethyst | #7c3aed | brand | Primary CTA buttons—a sharp, functional accent against the dark theme |
| Lavender | #a78bfa | accent | Links, badge text, and active states—the secondary, brighter interaction color |
| Tag Background | #8a5cf5 | accent | Background for tag/badge elements, used at 15% opacity |
| Success Green | #4ade80 | semantic | Success states or syntax highlighting within the app UI |
| Warning Yellow | #facc15 | semantic | Warning states or syntax highlighting within the app UI |
| Error Red | #f87171 | semantic | Error states or syntax highlighting within the app UI |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| ui-sans-serif, system-ui | "SF Pro Display", "Roboto", "Segoe UI", sans-serif | 400, 500, 600, 700 | 8px, 9px, 10px, 11px, 12px, 13px, 14px, 16px, 18px, 20px, 24px, 28px, 36px, 60px | 1.25-1.5 | Used for all text. The choice of a system font is deliberate, making the website feel like a native application—a functional tool for thought. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | -0.24 |
| body-sm | 14 | 1.5 | -0.28 |
| body | 16 | 1.5 | -0.32 |
| subheading | 18 | 1.4 | -0.36 |
| heading-sm | 24 | 1.33 | -0.48 |
| heading | 28 | 1.25 | -0.56 |
| heading-lg | 36 | 1.25 | -0.72 |
| display | 60 | 1.1 | -1.2 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "9999px",
    "cards": "12px",
    "inputs": "8px",
    "buttons": "8px"
  },
  "elementGap": "16px",
  "sectionGap": "96px",
  "cardPadding": "24px",
  "pageMaxWidth": "1120px"
}
```

## Components

### Primary CTA Button Group



### Tag Badge Collection



### Feature List Cards



### Primary CTA Button

**Role:** The main call-to-action button.

Solid Amethyst (#7c3aed) background with White (#ffffff) text. Padding is 16px 24px. Corner radius is 8px.

### Secondary Ghost Button

**Role:** A less prominent action, often for secondary choices like 'More platforms'.

Transparent background with Medium Gray (#bcbcbc) text. Padding is 8px. Corner radius is 8px. No border.

### Community Link Card

**Role:** Large, clickable cards used to link to community resources.

Surface (#1e1e1e) background with Bright Gray (#eeeeee) text. Padding is 24px. Corner radius is 12px. Features a 1px white inset glow `rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset`.

### Tag Badge

**Role:** Used inside the app UI to display tags on notes.

Pill-shaped (9999px radius). Background is Tag Background (#8a5cf5) at 15% opacity. Text is Lavender (#a78bfa). Padding is 2px 8px.

### App Showcase

**Role:** Displays the product UI directly on the page.

A detailed screenshot or rendered view of the Obsidian application, showing elements like the note editor, sidebar file browser, and distinctive graph view. Follows the site's dark theme.

### App Icon

**Role:** The primary brand mark and application icon.

A squircle-shaped icon (approx 20% border-radius) depicting a faceted purple and black gem. Has a subtle internal gloss and shadow to give it dimension.

### Navigation Link

**Role:** Text links in the main header navigation.

Medium Gray (#bcbcbc) text using the system UI font at 16px. No background or borders. Hover state is likely a color change to Bright Gray (#eeeeee).

## Do's

- Use the system UI font for all text to maintain the native-app feel.
- Reserve Amethyst (#7c3aed) and Lavender (#a78bfa) exclusively for interactive elements like buttons and links.
- Employ subtle 1px inset white glows for definition on dark cards and buttons.
- Maintain high contrast with light gray text (#eeeeee) on near-black backgrounds (#171717).
- Use pill-shaped radii (9999px) for tags and badges only; keep other elements sharp.
- Keep layouts centered and spacious, with generous vertical rhythm between sections.

## Don'ts

- Do not use traditional drop shadows for elevation; prefer the inset glow effect.
- Do not introduce other saturated colors into the primary UI; stick to the violet-on-dark palette.
- Do not use decorative or serif fonts; the brand identity is utilitarian.
- Do not use bright or light-themed backgrounds for primary content sections.
- Do not use large border radii on cards or buttons; stick to the 8-12px range.
- Do not use lifestyle photography; focus on the product UI as the primary visual.

## Similar Brands

| Business | Why |
| --- | --- |
| Raycast | Shares the dark UI, native-app feel from using system fonts, and a focus on utility and speed. |
| Linear | Similar dark, high-contrast aesthetic with a single sharp violet/purple accent and subtle internal glow effects. |
| VS Code | Directly echoes the visual language of a code editor, appealing to a developer-adjacent audience with its dark theme and focus on plaintext. |
| Superhuman | Another productivity tool with a premium, dark-mode-first interface that emphasizes speed and function over adornment. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Page Background**: `Abyss (#171717)`
- **Card Background**: `Surface (#1e1e1e)`
- **Default Text**: `Bright Gray (#eeeeee)`
- **Primary CTA**: `Amethyst (#7c3aed)`
- **Accent / Link**: `Lavender (#a78bfa)`
- **Border Glow**: `rgba(255, 255, 255, 0.05)`

### Example Component Prompts
1.  **Hero Section:** Create a hero section with a full-bleed Abyss (#171717) background. Add a centered headline 'Knowledge, connected.' in 60px system UI font, weight 600, color Bright Gray (#eeeeee), with -1.2px letter-spacing. Below it, add a sub-headline 'Your second brain, for life.' in 24px system font, weight 400, color Medium Gray (#bcbcbc), with -0.48px letter-spacing. Add a primary CTA button below that.
2.  **Primary CTA Button:** Create a button with text 'Get Started'. The background is Amethyst (#7c3aed) with White (#ffffff) text. Use a 16px system UI font, weight 500. Padding is 16px vertical and 24px horizontal. Corner radius is 8px.
3.  **Feature Card:** Create a feature card with a Surface (#1e1e1e) background. Padding is 24px. The corner radius is 12px. Add an inset box-shadow of `rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset`. Inside, add a heading in Bright Gray (#eeeeee) and body text in Medium Gray (#bcbcbc).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775929835064-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775929835064-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e793a53c-537e-46b0-881d-b15b63b9ff26-1777560393594-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e793a53c-537e-46b0-881d-b15b63b9ff26-1777560393594-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e793a53c-537e-46b0-881d-b15b63b9ff26-1777560393594-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e793a53c-537e-46b0-881d-b15b63b9ff26-1777560393594-preview-detail-poster.jpg |
