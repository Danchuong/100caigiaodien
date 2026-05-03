# Soulwire — Refero Style

- Refero URL: https://styles.refero.design/style/d4bb0eb1-c35f-4c5d-8dec-250324ea5990
- Site URL: https://soulwire.co.uk
- ID: d4bb0eb1-c35f-4c5d-8dec-250324ea5990
- Theme: dark
- Industry: design
- Created: 2026-04-30T02:33:59.550Z
- Ranks: newest: 347, popular: 907, trending: 742

> midnight command center behind frosted glass

## Description

Soulwire adopts a 'digital console' aesthetic, using a dark, monochromatic canvas as a backdrop for highly legible fixed-width typography. Information is presented with a developer-centric precision, featuring sparse layout and a muted, almost clinical color palette. The system emphasizes clear textual hierarchy and functional, unadorned elements, where interactions are highlighted by subtle shifts in text color rather than heavy graphic adornments.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Console Background | #16191b | neutral | Page background, primary surface |
| Primary Text | #e2e6e8 | neutral | Main body text, headings, general UI text, active links. This cool light gray offers strong contrast against the dark background |
| Code Block Highlight | #ffffff | neutral | Decorative text highlights within code-like listings, often representing active states or key items |
| Divider & Boundary | #000000 | neutral | Used for subtle borders and visual separation in a dark UI environment |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Roboto Mono | monospace | 300 | 10px, 12px, 13px, 14px, 16px, 24px | 1.00, 1.70, 2.00, 2.15 | Primary typeface for all UI elements, body text, headings, and lists. Its fixed-width nature reinforces the 'developer console' aesthetic and ensures consistent alignment. |
| Times |  | 400 | 16px | 1 | Times — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 2 |  |
| body-sm | 12 | 2 |  |
| body | 13 | 2 |  |
| body-lg | 14 | 2 |  |
| heading-sm | 16 | 2 |  |
| heading | 24 | 1.3 |  |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "8px",
  "sectionGap": "166px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Minimal Card

**Role:** Container

Invisible cards with no background, border, shadow, or padding, effectively acting as logical groupings without visual separation. Used for content blocks like the 'about' section and 'labs' list items.

### Navigation Link

**Role:** Interactive Element

Inline text link for navigation, uses Primary Text (#e2e6e8) by default and Code Block Highlight (#ffffff) for active or hovered states. No underlines or background fills, relying solely on text color for interaction feedback.

### Footer Social Link

**Role:** Interactive Element

Text link in the footer, rendered in Primary Text (#e2e6e8). Similar to navigation links but within the footer context, implying external resource access.

### Listing Item

**Role:** Content Display

Each item in the 'Labs' list is a distinct block, potentially interactive. Displays numbers and titles in Primary Text (#e2e6e8).

## Do's

- Use Console Background (#16191b) as the base for all page backgrounds and primary surfaces.
- Apply Roboto Mono with 0.1500em letter-spacing for all textual content to maintain the code-like aesthetic.
- Ensure all primary text (headings, body, interactive elements) uses Primary Text (#e2e6e8) for high contrast and readability.
- Leverage Code Block Highlight (#ffffff) exclusively for subtle emphasis or active states on textual elements within lists or code contexts.
- Maintain a clear visual hierarchy through variations in Roboto Mono font sizes and the strategic employment of Primary Text (#e2e6e8) vs. the darker background.
- Employ minimal visual adornments, relying on precise typography and spacing to structure content rather than heavy borders or backgrounds.
- Use 166px for section gaps and 8px for inter-element spacing to establish a consistent, compact rhythm.

## Don'ts

- Do not introduce any saturated colors; the palette is strictly monochromatic and cool-toned.
- Avoid decorative borders, shadows, or background fills on any cards or content blocks unless explicitly defining an active state with text color.
- Do not use generic system fonts; Roboto Mono is central to the brand's identity.
- Do not deviate from the established letter-spacing of 0.1500em for Roboto Mono; it is a signature characteristic.
- Refrain from using varied timing functions or complex transitions; stick to ease and opacity changes for motion.
- Do not use heavy, display-style headings; maintain a light, technical feel even for titles.
- Do not exceed a page width; the content should be left-aligned within the full-bleed canvas.

## Layout

The page employs a full-bleed dark canvas with content largely contained within a left-aligned, unbounded width flow. The hero section introduces the main 'Salut' text, followed by an 'about' section and a 'labs' section, all arranged linearly. Vertical spacing is critical, using a large 166px section gap. Individual content elements are tightly packed, with an 8px element gap. Navigation is minimal, limited to a small header logomark and footer links, all integrated purely as text. There is no grid system for content; everything stacks vertically, creating a continuous, compact flow of information.

## Imagery

This site uses no imagery, illustrations, or graphics beyond its subtly stylized logomark. The visual system is entirely text-dominant, relying on typographic presentation and stark empty space to convey its aesthetic. Icons are minimal, represented by character symbols or single-color SVGs that integrate seamlessly with the text. No photography or graphic elements are present to distract from the code-like interface.

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Similar dark, code-editor aesthetic with heavy reliance on fixed-width typography and minimal UI elements. |
| Linear | Employs a stark, high-contrast dark mode with precise spacing and typographic hierarchies, focusing on efficiency. |
| Stripe (developer docs) | Uses a clean, code-centric visual style, often with dark backgrounds and carefully chosen monospaced fonts for technical content. |
| GitHub (dark mode UI) | Dark UI with emphasis on code readability, clear text hierarchy, and functional, rather than decorative, components. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #e2e6e8
background: #16191b
border: #000000
accent: #e2e6e8 (for active text)
primary action: no distinct CTA color

Example Component Prompts:
Create a header bar: Console Background (#16191b) background, with a brand logomark and navigation links using Primary Text (#e2e6e8) at Roboto Mono 16px, 0.1500em letter-spacing.
Create an 'About' section: Starts with 'Info' heading in Primary Text (#e2e6e8), Roboto Mono 16px, 0.1500em letter-spacing. Follow with body text in Primary Text (#e2e6e8), Roboto Mono 13px, 0.1500em letter-spacing, line-height 2.0, arranged in a simple block.
Create a 'Labs' list item: Start with a numerically prefixed title, using Primary Text (#e2e6e8), Roboto Mono 13px, 0.1500em letter-spacing, line-height 2.0. On hover, change text color to Code Block Highlight (#ffffff).
Create a footer with social links: Console Background (#16191b) background. Links use Primary Text (#e2e6e8), Roboto Mono 12px, 0.1500em letter-spacing, line-height 1.7, spaced with 16px horizontal margins.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516420400-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516420400-thumb.jpg |
