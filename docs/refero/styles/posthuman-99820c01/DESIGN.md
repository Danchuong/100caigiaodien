# Posthuman — Refero Style

- Refero URL: https://styles.refero.design/style/99820c01-a9a7-40a4-9d73-8c75b19e7e91
- Site URL: https://posthuman.studio
- ID: 99820c01-a9a7-40a4-9d73-8c75b19e7e91
- Theme: dark
- Industry: design
- Created: 2026-04-30T03:45:15.369Z
- Ranks: newest: 76, popular: 1184, trending: 1180

> gallery on black velvet

## Description

Posthuman presents a stark, high-contrast digital canvas, emphasizing bold typography and rich imagery. The visual system leverages pure black backgrounds and a limited grayscale palette to make product and art photography stand out. Subtle motion and interaction provide a sense of refined professionalism without detracting from the visual content.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Zero | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Graphite Static | #0d0d0d | neutral | Secondary background text, subtle text elements, some component borders — a slightly lighter black for nuanced text differentiation |
| Fog Canvas | #c9c9c9 | neutral | Supporting neutral for secondary UI, dividers, and muted labels. Do not promote it to the primary CTA color |
| Deep Ocean | #0064E1 | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Diatype Variable | Inter | 400 | 18px, 40px | 1.30, 1.40 | Primary headings and navigation links — a confident, geometric sans-serif for striking titles and key navigational elements. Its variable nature suggests flexibility in weight for future applications. |
| Arizona Sans Variable | Lexend Deca Light | 215 | 20px |  | Secondary text and captions — a slender, modern sans-serif at a light weight (215) for descriptive text, giving content a sophisticated, airy feel that complements the bold imagery. |
| -apple-system | system-ui | 400 | 15px | 1.65 | Body copy and informational text — a robust system font for readable, functional text where clarity is paramount. |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "images": "0px",
    "buttons": "0px"
  },
  "elementGap": "20px",
  "sectionGap": "65px",
  "cardPadding": "49px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link

**Role:** Top-right navigation items

Uses Diatype Variable, weight 400, size 18px. Color is Fog Canvas (#c9c9c9) on hover and default, Absolute Zero (#000000) when active or primary. No visible padding, implicitly acts as text links.

### Project Card Link

**Role:** Clickable image cards for work projects

These are essentially bare images with an overlaid text label. No explicit border, background, or radius. The text 'COSMIC DRIVE' or 'HELENE RUBINSTEIN' uses Arizona Sans Variable, weight 215, size 20px, color Absolute Zero (#000000). The cards are implied by image boundaries, arranged in a grid with 20px vertical gap.

### Branding Logo (Text)

**Role:** Site title in the header

The 'POSTHUMAN' text logo is rendered in Diatype Variable, weight 400, size 18px, color Absolute Zero (#000000). Preceded by a small icon.

## Do's

- Prioritize image content: Most of the page should be dedicated to high-quality, full-bleed imagery, allowing generous space around product visuals.
- Use pure black for backgrounds: All primary page backgrounds and image surrounds should be Absolute Zero (#000000) to create maximum contrast and focus on visuals.
- Employ Diatype Variable for headlines and navigation: Use Diatype Variable at 40px for prominent headlines and 18px for navigation links, maintaining consistent weight 400.
- Employ Arizona Sans Variable for image captions: Use Arizona Sans Variable at 20px, weight 215, for all descriptive text related to imagery.
- Maintain strict spacing: Use 20px for vertical gaps between visual elements and 49px for internal padding within implicit card structures.
- Keep all corners sharp: Employ a 0px border-radius for all visual elements, including images and any implied card borders.

## Don'ts

- Avoid decorative borders or shadows: Components should rely on content boundaries rather than explicit borders or drop shadows to define their space.
- Do not introduce additional background colors unless specifically for a highlighted section: All backgrounds should be variations of black or the neutral Fog Canvas (#c9c9c9).
- Refrain from using heavily stylized buttons: Interactive elements should be subtle text links or ghost-like outlines, not filled chromatic buttons.
- Do not add additional icons or graphical elements without strict justification: The focus is on photography/renderings, not illustrative UI elements.
- Do not deviate from the specified font families, weights, and sizes: The typographic hierarchy is minimalist and precise.
- Avoid complex gradients or overlaid textures: Maintain a flat, dark canvas to highlight imagery.

## Layout

The page primarily uses a max-width, center-aligned layout, with a clear header. The hero section is subtle, starting directly with the logo and navigation. The main content area is a dynamic two-column grid that uses implicit boundaries for project cards, allowing for varied aspect ratios within the grid cells. There is a consistent vertical rhythm created by the 20px element gap between these image cards and a 65px section gap where content blocks change. The overall density is spacious, giving each piece of visual content room to breathe.

## Imagery

This site prominently features high-fidelity 3D renders and product photography, often with a surreal or artistic treatment. Imagery is full-bleed or presented as isolated, perfectly framed pieces on a black canvas, with sharp, unrounded edges. The focus is on showcasing the intricate details of the work, often with dramatic lighting and color accents within the images themselves, rather than through external styling. Photography is product-focused, meticulously staged, and generally features a neutral background or abstract environment to highlight the subject. Icons, if present, appear to be minimal and monochromatic.

## Similar Brands

| Business | Why |
| --- | --- |
| B&O (Bang & Olufsen) | High-fidelity product photography, dark minimalist canvas, focus on artistic presentation. |
| Apple (Product pages) | Clean, full-bleed product showcases on dark or neutral backgrounds, emphasis on visual detail. |
| Studio Fuksas | Architectural portfolios often use a dark UI to highlight striking visual work, similar high-contrast aesthetic. |
| Artemide Lighting | Product imagery presented against dark backgrounds to emphasize form and light, sparse text. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #c9c9c9
background: #000000
border: #000000
accent: #0064E1
primary action: no distinct CTA color

Example Component Prompts:
1. Create a header: background Absolute Zero (#000000). Left-aligned logo 'POSTHUMAN' in Diatype Variable, weight 400, size 18px, color Absolute Zero. Right-aligned navigation links 'Work', 'About', 'Play' in Diatype Variable, weight 400, size 18px, color Absolute Zero, with 26px right margin between links.
2. Create a project card: No explicit background or borders. Overlay text 'COSMIC DRIVE' using Arizona Sans Variable, weight 215, size 20px, color Absolute Zero (#000000). Ensure the card itself is an image with 0px radius.
3. Create a descriptive text block: Use Graphite Static (#0d0d0d) as the text color. The primary text should use -apple-system, weight 400, size 15px, lineHeight 1.65. This block should be presented on a Fog Canvas (#c9c9c9) background.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520700757-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520700757-thumb.jpg |
