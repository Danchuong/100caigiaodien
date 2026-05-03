# Gus — Refero Style

- Refero URL: https://styles.refero.design/style/3ec00801-59b9-4c1f-af33-429642c186d4
- Site URL: https://gus.biz
- ID: 3ec00801-59b9-4c1f-af33-429642c186d4
- Theme: dark
- Industry: agency
- Created: 2026-04-30T03:47:17.037Z
- Ranks: newest: 66, popular: 687, trending: 440

> Pixelated grid playground.

## Description

The Gus design system evokes a playful, almost retro, digital workspace. A dominant, vibrant teal acts as the primary canvas, overlaid with a subtle grid pattern, giving the impression of an engineering blueprint or a pixel art canvas. Typography is minimal and pragmatic, with an emphasis on system fonts, contrasting sharply with occasional bursts of bright, primary accent colors that draw attention to key interactive elements. Visual treatments are flat with sharply defined shapes, avoiding shadows or complex gradients.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Grid Canvas | #008263 | neutral | Primary page background, underlying grid color |
| Grid Line | #050000 | neutral | Subtle dark lines for the background grid pattern, primary body text, divider lines |
| Midnight Ink | #000000 | neutral | Text color for primary content, icon outlines, button borders, default element outlines |
| Paper White | #ffffff | neutral | Highlight text, link text on dark backgrounds, secondary element outlines |
| Scroll Highlight | #f5c04f | accent | Yellow wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Times | Times New Roman | 400 | 16px | 1.20 | Body text and standard informational content. Its serif nature provides a grounding contrast to the pixelated grid background. |
| Arial | Helvetica Neue | 400, 700 | 13px, 15px, 20px, 28px | 1.20, 1.25, 1.50 | UI labels, button text, and headings. Its clean sans-serif form ensures clarity in interactive elements and titles. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.25 |  |
| body-sm | 15 | 1.25 |  |
| body | 20 | 1.25 |  |
| body-lg | 28 | 1.25 |  |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "9999px",
    "starburst": "0px",
    "scrollButton": "9999px"
  },
  "elementGap": "0px",
  "sectionGap": "",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Header Navigation Link

**Role:** Navigation element

Transparent background, #ffffff text on `Grid Canvas`, no padding or border, 0px radius. Used for top-level navigation items. Text uses Arial, weight 400.

### Menu Toggle Button

**Role:** Toggle control

Black square with two white horizontal lines, 0px radius. No discernible padding. Functions as a hamburger menu icon.

### Scroll Call to Action

**Role:** Interactive indicator

Circular button with a '#f5c04f' background and '#000000' text. 9999px radius to create a perfect circle. Arial, weight 400, size 15px. Text 'Scroll' is centered within. No padding visible.

### Starburst Logo Placeholder

**Role:** Brand mark

A red starburst shape, '#ff0000', with the word 'gus' in white, '#ffffff'. This element acts as a distinctive and playful brand identifier. The edges are sharp; 0px radius.

### AdAge Award Banner

**Role:** Informational banner

Horizontal strip at the top. White text, '#ffffff', on the 'Grid Canvas' background '#008263'. Text '🏆 Ad Age Small Agency of the Year Winner'. Uses Times, weight 400, size 16px. No extra padding or borders.

## Do's

- Prioritize '#008263' for large background areas, emphasizing the grid pattern with '#050000' lines.
- Use 'Times' for paragraph text and 'Arial' for all UI labels, headings, and buttons.
- Apply 9999px border-radius to perfect circular elements like the 'Scroll' button.
- Maintain a flat visual hierarchy with no shadows or complex gradients unless explicitly defined.
- Employ the starburst shape with '#ff0000' for key brand accents or playful callouts.
- Use '#000000' for primary text on light backgrounds and '#ffffff' on dark backgrounds or highlights.
- Ensure interactive elements like buttons and links use distinct accent colors or clear text-on-background contrast.

## Don'ts

- Avoid using any form of drop shadows or box shadows, as the system relies on flat aesthetics.
- Do not introduce gradients; the visual system is strictly flat color.
- Do not deviate from the specified circular or sharp-edged radii; curved rects are not part of this system.
- Do not use generic system UI elements or styles that introduce elevation or depth.
- Avoid mixing primary and secondary fonts unnecessarily; adhere strictly to their defined roles.
- Do not use subtle color variations for interactive states; rely on direct background or text color changes.

## Similar Brands

| Business | Why |
| --- | --- |
| Neocities | Embraces a retro, pixelated aesthetic with simple shapes and bold primary colors. |
| MS Paint | Visual style of flat colors, strong outlines, and basic geometry without gradients or shadows. |
| Command Line Interface (CLI) tools | Minimalist visual language, often monochrome with occasional bright highlights, focusing on direct interaction. |
| Early web design (1990s) | Characterized by grid backgrounds, system fonts, and stark color contrasts, avoiding complex visual effects. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
text: #000000
background: #008263
border: #050000
accent: #f5c04f
primary action: no distinct CTA color

### 3-5 Example Component Prompts
1. Create a top banner section: background '#008263'. Text '🏆 Ad Age Small Agency of the Year Winner' color '#ffffff', font 'Times', weight 400, size 16px. Place a menu button on the right: '#000000' square with two '#ffffff' horizontal lines.
2. Design the brand logo area: a 'Starburst Logo Placeholder' with a '#ff0000' starburst and 'gus' text in '#ffffff'.
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520816605-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520816605-thumb.jpg |
