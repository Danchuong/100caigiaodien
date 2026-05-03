# Adaline — Refero Style

- Refero URL: https://styles.refero.design/style/312423bf-72ea-42fb-b8f5-ab0104e778f3
- Site URL: https://www.adaline.ai
- ID: 312423bf-72ea-42fb-b8f5-ab0104e778f3
- Theme: light
- Industry: ai
- Created: 2026-04-30T00:36:11.612Z
- Ranks: newest: 751, popular: 136, trending: 91

> Mist-shrouded valley

## Description

Adaline employs a serene, naturally-inspired aesthetic, combining a nearly monochromatic palette with organic, muted greens and browns. The visual language conveys quiet authority: elegant typography with subtle letter spacing, carefully rounded components, and restrained use of color only for functional elements. Grays are abundant, creating a soft, layered depth, while a single striking green serves as the primary accent, signaling interactive states and brand identity. Components feel integrated with their environment, avoiding harsh contrasts or strong shadows.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Ice | #fbfdf6 | neutral | Page backgrounds, elevated surface backgrounds, neutral button fills, focus rings |
| Adaline Ink | #0a1d08 | brand | Primary text, heading text, strong borders, brand accents, button text on light backgrounds |
| Mist Gray | #c5ccb6 | neutral | Subtle borders, secondary text, muted backgrounds for layered surfaces, list item delimiters |
| Deep Earth | #31200b | neutral | Decorative fills and strokes in illustrations, occasional subtle text on light backgrounds |
| Valley Green | #203b14 | brand | Brand accent for active states, link hover states, icon fills, and ghost button text/borders |
| Stone Moss | #e0e5d5 | neutral | Secondary button borders, subtle separator lines, card dividers |
| Amber Seed | #4a3212 | accent | Primary action button background – a warm, muted brown that grounds interactive elements |
| Forest Dew | #d7e8b5 | neutral | Light background fill for subtle elements or active navigation items |
| Blackest Night | #000000 | neutral | Rare strong contrast element, graphic fills for brand logos |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| akkurat |  | 400, 700 | 12px, 14px, 18px, 47px, 53px | 0.98, 1.00, 1.33, 1.43, 1.44, 1.67 | Primary brand typeface for all headings, body text, and UI elements. Its slightly condensed and precise forms define the system's clarity. The consistent subtle negative letter spacing across sizes provides legibility while maintaining a focused visual presence. |
| fragmentMono |  | 400 | 14px | 1.00 | Monospaced typeface used for small, functional UI elements like labels or metadata, providing a clear, technical counterpoint to the primary typeface without being overly dominant due to its fixed size and positive letter spacing. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.43 |  |
| body-sm | 14 | 1.43 |  |
| body | 18 | 1.43 |  |
| body-lg | 47 | 1.3 |  |
| heading-sm | 53 | 1.3 |  |

## Spacing & Shape

```json
{
  "radius": {
    "images": "8px",
    "buttons": "20px",
    "navItems": "20px"
  },
  "elementGap": "4px",
  "sectionGap": "48px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button (Filled)

**Role:** Emphasized calls to action

Filled with Amber Seed (#4a3212), text in Canvas Ice (#fbfdf6), 20px border-radius, 24px horizontal padding.

### Secondary Action Button (Ghost)

**Role:** Secondary calls to action, less emphasis

Ghost button with Canvas Ice (#fbfdf6) background, Adaline Ink (#0a1d08) text and 1px border. 20px border-radius, 24px horizontal padding. Hover state shifts to Valley Green text and border.

### Tertiary Action Button (Ghost Thin)

**Role:** Minimal calls to action, often in navigation

Ghost button with Canvas Ice (#fbfdf6) background, muted Valley Green (#203b14) text and 1px Stone Moss (#e0e5d5) border. 20px border-radius, 24px horizontal padding.

### Navigation Link

**Role:** Top-level navigation and contextual links

Adaline Ink (#0a1d08) text, akkuraat 400 at 14px, typically 24px horizontal padding and 16px vertical spacing from siblings. Active states may use Forest Dew (#d7e8b5) background or Valley Green text.

### Client Logo Card

**Role:** Display partner logos

Contained within a subtle border of Mist Gray (#c5ccb6), with a Canvas Ice (#fbfdf6) background. Logos are often Blackest Night (#000000) for contrast. 8px border-radius.

## Do's

- Prioritize Canvas Ice (#fbfdf6) for all primary backgrounds to maintain the light, airy feel.
- Use Adaline Ink (#0a1d08) for primary headings and body text, ensuring a consistent dark, earthy tone.
- Apply Akkurat with a consistent -0.0400em letter spacing for all headings and body text to maintain signature visual precision.
- Employ 20px border-radius for all interactive elements like buttons and navigation items for a softer, approachable feel.
- Reserve Amber Seed (#4a3212) exclusively for the background of primary calls to action to ensure clear visual hierarchy.
- Maintain a clear vertical rhythm using 48px sectional gaps and 24px inner padding for cards.
- Use Valley Green (#203b14) as the primary accent for interactive states, icons, and subtle brand highlights.

## Don'ts

- Do not use highly saturated or vivid colors outside of designated brand accent areas; the system relies on a muted, natural palette.
- Avoid harsh shadows or strong elevation; the design favors flat, layered surfaces with minimal depth indicators.
- Do not introduce new typefaces; Akkurat and fragmentMono are the only approved fonts.
- Do not use generic square or minimal border radii for buttons or navigation items; always apply 20px for consistency.
- Avoid dense packing of elements; maintain comfortable element gaps (e.g., 4px) and page-level spacing.
- Do not use light text on light backgrounds for interactive elements; ensure sufficient contrast, particularly against Canvas Ice.
- Do not deviate from the established color roles; for instance, only Amber Seed should be a solid button background.

## Imagery

The site predominantly uses abstract, digital-nature illustrations. These feature rendered landscapes reminiscent of real-world photography but with a stylized, digital art aesthetic, such as misty mountains and serene lakes. Imagery serves a decorative and atmospheric role, often as full-bleed backgrounds for hero sections, creating a calm and contemplative mood. There are also product UI screenshots, which appear as contained elements, likely with slight rounding and minimal borders. Icons are minimal, monochromatic, and outlined, maintaining a clean and functional appearance. The overall impression is one of visual spaciousness and low density, letting the abstract visuals set the tone.

## Similar Brands

| Business | Why |
| --- | --- |
| Anthropic AI | Shares a similar muted, almost monochromatic palette with a single earthy accent color and understated typography. |
| Linear | Employs precise typography, clean, often border-defined components, and subtle color accents against a neutral canvas to convey professionalism and efficiency. |
| Aether AI | Features abstract, nature-inspired or digitally rendered backgrounds for hero sections, combined with a focus on UI clarity. |
| Vercel | Utilizes a clean, often light-themed interface with minimal shadows, precise spacing, and carefully chosen accent colors to highlight interactive elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #0a1d08
background: #fbfdf6
border: #e0e5d5
accent: #203b14
primary action: #4a3212 (filled action)

Example Component Prompts:
Create a Primary Action Button: #4a3212 background, #fbfdf6 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.

Create a feature card: use Canvas Ice (#fbfdf6) background and Mist Gray (#c5ccb6) 1px border with 8px radius. Inside, use Akkurat 18px weight 400 for a title, Adaline Ink (#0a1d08). Include a body text paragraph in Akkurat 14px weight 400, Adaline Ink (#0a1d08) with 16px top margin. Apply 24px padding inside the card.

Create a navigation bar: use Canvas Ice (#fbfdf6) background. Left-aligned links 'Products', 'Pricing', 'Blog' in Akkurat 14px weight 400, Adaline Ink (#0a1d08), with 16px elementGap. Right-aligned ghost button 'Watch Demo' with Canvas Ice (#fbfdf6) background, Valley Green (#203b14) text, 1px Stone Moss (#e0e5d5) border, 20px radius, 24px horizontal padding. Next to it, a filled button 'Start for free' with Amber Seed (#4a3212) background, Canvas Ice (#fbfdf6) text, 20px radius, 24px horizontal padding. Ensure all elements have appropriate vertical alignment and 24px horizontal padding within the nav bar.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509343907-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509343907-thumb.jpg |
