# Jonas Pelzer — Refero Style

- Refero URL: https://styles.refero.design/style/dd96b76a-b691-49e7-ba8f-1cdc8f7172e6
- Site URL: https://jonaspelzer.com
- ID: dd96b76a-b691-49e7-ba8f-1cdc8f7172e6
- Theme: light
- Industry: design
- Created: 2026-04-30T03:18:30.581Z
- Ranks: newest: 184, popular: 1319, trending: 1320

> dot-matrix digital blueprint

## Description

Jonas Pelzer's design system evokes an industrial, dot-matrix digital aesthetic on a clean white canvas. Typography blends a monospaced display font with a classic serif for body text, creating a tech-forward yet grounded feel. Interactions are highlighted with a distinct violet, often in subtle outlines or transparent fills, suggesting responsive interfaces and active states without overwhelming the stark, high-contrast monochrome base. Surface treatments favor soft, rounded cards and ghost buttons, maintaining lightness across the layout.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, ghost button backgrounds, active navigation text |
| Ink Black | #000000 | neutral | Primary text, headings, body copy, list items, card text, general borders, button outlines |
| Ghost Gray | #d4d6dd | neutral | Subtle button borders, decorative strokes |
| Digital Violet | #3502ff | brand | Violet outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Muted Lilac | #d7ccff | brand | Violet accent for outlined action borders, linked labels, and lightweight interactive emphasis. Do not promote it to the primary CTA color |
| Action Grape | #5d35ff | brand | Violet text accent for links, tags, and emphasized short phrases. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Scope | IBM Plex Mono | 400 | 13px, 14px, 17px, 22px, 42px | 1.00, 1.10, 1.20 | Display headings and navigation items — its monospaced, dot-matrix character is a signature choice, giving a distinct digital, architectural feel. This font defines the brand's machine-like precision. |
| Signifier | Playfair Display | 400 | 15px, 16px, 18px, 22px, 25px, 42px | 1.00, 1.20 | Body copy, list items, and subheadings — its classic serif presence grounds the design, providing readability and a timeless counterpoint to the more rigid display font. Offers a sense of established authority. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.1 | 0.26 |
| body | 15 | 1.2 | 0.3 |
| heading-sm | 22 | 1 | 0.55 |
| heading | 25 | 1 | 0.5 |
| display | 42 | 1 | 1.512 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "navbar": "8.26px",
    "buttons": "12px",
    "default": "12px",
    "navbarItem": "3.5px"
  },
  "elementGap": "5px",
  "sectionGap": "64px",
  "cardPadding": "14px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Navigation and secondary actions

Transparent background with a subtle border in Ghost Gray (#d4d6dd). Text is Ink Black (#000000). Radius is 12px. Used for navigation elements and low-hierarchy actions, maintaining a minimal aesthetic.

### Outlined Violet Button

**Role:** Primary Call to Action

Transparent background, Muted Lilac (#d7ccff) border at 1px. Text is Action Grape (#5d35ff). Padding is 6px vertical, 14px horizontal. Radius is 12px. Visually distinct as the primary action through its chromatic outline and text color.

### Work Card

**Role:** Portfolio item container

Background in Muted Lilac (rgba(53, 2, 255, 0.1)), with a 12px border-radius. No box shadow. Used to subtly contain portfolio items, featuring a soft violet tint.

### Navigation Link (Active)

**Role:** Current page indicator

Background in Digital Violet (#3502ff), text in Canvas White (#ffffff). Radius is 3.5px for individual items, contained within a navbar with 8.26px radius. Creates a strong visual cue for the active state.

### Navigation Wrap

**Role:** Container for primary navigation

Background opacity of Canvas White (rgba(255, 255, 255, 0.3)), with a Digital Violet (rgba(53, 2, 255, 0.2)) border. Blur filter of 10px applied. Has a radius of 8.26px and a shadow rgba(53, 2, 255, 0.1) 0px 1px 4px 2px.

## Do's

- Prioritize Canvas White (#ffffff) for page backgrounds to maintain an open, clean aesthetic.
- Use Ink Black (#000000) for all primary text elements, ensuring high contrast and legibility.
- Apply Digital Violet (#3502ff) exclusively for active navigation states and decorative accents.
- Use the Scope typeface for all headings and navigation to leverage its distinctive digital character.
- Employ a 12px border-radius for all cards and buttons to ensure a consistent softened aesthetic.
- Utilize Muted Lilac (#d7ccff) for ghost button outlines and subtle card backgrounds.
- Maintain a compact elementGap of 5px to keep interactive elements closely related.

## Don'ts

- Do not use highly saturated colors for large background areas; maintain a light monochromatic base.
- Avoid heavy drop shadows; implement transparent shadows like rgba(53, 2, 255, 0.1) 0px 1px 4px 2px sparingly, only for elevated components like the navigation wrap.
- Do not use generic system fonts for headings; maintain the distinct visual identity provided by Scope.
- Do not apply excessive padding to cards or buttons; adhere to the compact 6px vertical, 14px horizontal button padding and 14px card padding.
- Do not introduce strong visual dividers between sections; rely on spacing and subtle background shifts to define content blocks.
- Avoid bold or heavy weights for any typeface; the design relies on the weight 400 of Scope and Signifier for consistent typography.
- Do not use solid fills for primary action buttons; always use the outlined Muted Lilac style.

## Elevation

| Element | Style |
| --- | --- |
| Navigation Wrap | rgba(53, 2, 255, 0.1) 0px 1px 4px 2px |

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Clean white backgrounds with accent colors defining interactive elements and a focus on UI typography. |
| Linear | High contrast dark text on light backgrounds, with a specific accent color for interactions and a strong emphasis on typographic clarity. |
| Read.cv | Minimalist aesthetic driven by typography and subtle accent colors on a largely achromatic canvas. |
| Stripe (early designs) | A similar approach to using distinct, clear typography combined with a single saturated color to highlight key actions against a clean, white background. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
Text: #000000
Background: #ffffff
Border: #000000
Accent: #3502ff
primary action: #d7ccff (outlined action border)

### 3-5 Example Component Prompts
1. Create a hero section: Canvas White background. Headline 'JONAS PELZER is a DESIGNER' using Scope, weight 400, size 42px, Ink Black, with 0.0360em letter-spacing. Subtext 'With 15+ years of professional experience...' using Signifier, weight 400, size 18px, Ink Black, 0.0200em letter-spacing.
2. Design an 'Outlined Violet Button': with Muted Lilac (#d7ccff) border, Action Grape (#5d35ff) text 'See more work' using Scope, weight 400, size 14px, 6px vertical padding, 14px horizontal padding, and 12px border-radius.
3. Implement a 'Work Card': Muted Lilac (rgba(53, 2, 255, 0.1)) background, 12px border-radius, no shadow, with 14px padding inside for content.
4. Build an 'Active Navigation Link': Digital Violet (#3502ff) background, Canvas White (#ffffff) text 'Work' using Scope, weight 400, size 17px, 6px vertical padding, 14px horizontal padding, and 3.5px border-radius.
5. Create a sticky 'Navigation Wrap': Canvas White (rgba(255, 255, 255, 0.3)) background, 8.26px border-radius, with a Digital Violet (rgba(53, 2, 255, 0.2)) border and a shadow of rgba(53, 2, 255, 0.1) 0px 1px 4px 2px, and a blur(10px) filter applied.

### Motion Philosophy

Motion interactions are controlled and expressive, with a preference for 'ease' timing functions. Durations mostly in the 0.2s to 0.8s range suggest noticeable but not distracting transitions. Common transformations like 'transform' indicate subtle shifts and movements to guide user attention without being overly flashy. The personality is expressive, hinting at delightful micro-interactions without sacrificing professionalism.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519093301-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519093301-thumb.jpg |
