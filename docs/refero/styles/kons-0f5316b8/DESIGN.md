# Kons — Refero Style

- Refero URL: https://styles.refero.design/style/0f5316b8-7e37-4e11-aae9-5fb6391739ed
- Site URL: https://kons.fyi
- ID: 0f5316b8-7e37-4e11-aae9-5fb6391739ed
- Theme: light
- Industry: saas
- Created: 2026-02-05T17:15:15.000Z
- Ranks: newest: 1226, popular: 632, trending: 1231

> White paper blueprint – precise, high-contrast, functional.

## Description

Kons presents a minimalist interface, characterized by a stark white background and primarily achromatic text. The design is a study in restraint, relying on subtle gray tones for body copy and reserving vibrant, highly saturated colors exclusively for interactive button states, creating a focused, high-contrast interaction model. This approach elevates functionality, where color guides the user rather than decorating the interface, resulting in a direct, utilitarian aesthetic.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, primary text color for buttons and links. |
| Text Gray | #757575 | neutral | Body text and secondary information, providing clear readability against Canvas White without competing with primary accents. |
| Accent Green | #00b849 | accent | Background for interactive buttons, indicating success or progression. Its vividness is a deliberate contrast against the neutral palette. |
| Accent Orange | #f57200 | accent | Background for interactive buttons, used sparingly for specific calls to action where its warmth draws attention. |
| Action Blue | #008bf5 | accent | Background for interactive buttons, providing a cool, stable option for calls to action. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | Inter | 400 | 12px, 14px, 16px | 1.33, 1.43, 1.50 | Primary typeface for all UI elements, including headings, body text, links, and buttons. Its clean, sans-serif structure maintains legibility even at small sizes and with minimal letter-spacing adjustments, reinforcing the functional aesthetic. |
| Karla | Karla | 400 | 16px | 1.50 | Used for specific secondary text areas (e.g., footers or descriptive labels). Its slightly wider character set provides a subtle visual distinction from Inter, while maintaining high readability. |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "32px",
    "links": "4px",
    "buttons": "9999px"
  },
  "elementGap": "4px",
  "sectionGap": "64px",
  "cardPadding": "8px",
  "pageMaxWidth": null
}
```

## Components

### Button Group — Pill Variants



### Toggle / Add Action Control



### Stat / Metric Card Block



### Ghost Button (Pill)

**Role:** Primary interactive element for navigation and secondary actions.

Transparent background, 'Canvas White' text (#ffffff), 1px 'Canvas White' border (#ffffff), and a 9999px border-radius, giving it a distinctive pill shape. Padding is minimal or absent, relying on text size for visual weight.

### Accent Green Button

**Role:** Call-to-action button, indicating successful or primary actions.

Solid 'Accent Green' background (#00b849), 'Canvas White' text (#ffffff), 1px 'Canvas White' border (#ffffff) and a 9999px border-radius. Padding is minimal or absent, leveraging color for prominence.

### Accent Orange Button

**Role:** Secondary call-to-action button, for important but not primary actions.

Solid 'Accent Orange' background (#f57200), 'Canvas White' text (#ffffff), 1px 'Canvas White' border (#ffffff) and a 9999px border-radius. Padding is minimal or absent.

### Link

**Role:** Inline text navigation.

No discernable background, 'Canvas White' text (#ffffff) only when within navigation components or when it contrasts with background color like Black, or '#757575' for general text. Has a 4px border-radius applied (likely to its hover/active state or an underlying container) with no explicit border.

## Do's

- Prioritize 'Canvas White' (#ffffff) for all main backgrounds to maintain visual brevity.
- Use 'Text Gray' (#757575) exclusively for body copy and descriptive text.
- Apply 9999px border-radius to all interactive buttons for a consistent pill-shaped aesthetic.
- Reserve 'Accent Green' (#00b849), 'Accent Orange' (#f57200), and 'Action Blue' (#008bf5) for button backgrounds only, to highlight interactive elements.
- Maintain minimal padding (4-8px) around interactive elements to keep dense information layout.
- Use Inter at weight 400 for all primary text elements, and restrict letter-spacing adjustments to `-0.02em` or `-0.01em` at smaller sizes.

## Don'ts

- Do not use color for decorative purposes; every color must serve a functional role.
- Avoid shadows or complex gradients; the design relies on flat colors and clean lines for depth.
- Do not introduce additional font families beyond Inter and Karla.
- Do not use a border-radius other than 9999px for primary buttons or 4px for links, unless explicitly defined for a specific component.
- Avoid excessive spacing between elements; maintain a compact information density.
- Do not use highly saturated colors for text or non-interactive elements.

## Layout

The layout is characterized by a central, information-dense block against a full-bleed 'Canvas White' background. There is no discernible `pageMaxWidth` value, suggesting a potentially fluid or center-aligned content area that adapts to viewport width. The hero section, if present, is a simple, typography-focused statement. Section rhythm is implied by vertical spacing, not by alternating background colors or distinct dividers. Content appears to be stacked vertically, with elements like buttons and links grouping together. Navigation, as seen in the isolated button variant, consists of distinct, pill-shaped elements.

## Imagery

This design system primarily relies on UI elements and typography to convey information. There is no visible use of photography, complex illustrations, or 3D renders. Icons, if present (as suggested by the button content), are minimal and monochromatic, acting as functional indicators rather than decorative elements. The visual language is purely UI-driven, focusing on text and interactive components.

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Shares a high-contrast, functionally driven UI with a clean, almost stark aesthetic where color is used sparingly for interactive elements. |
| Vercel | Exhibits a similar commitment to minimalist design, emphasizing typography and negative space, with minimal use of color restricted to interactive components or statuses. |
| Supabase | Employs a stark background with well-defined, subtly colored interactive elements, prioritizing utility over ornamentation. |
| Framer | Features a very clean, interface-focused design that uses a limited, functional color palette and emphasizes clear typographic hierarchy. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (Body): #757575
- Background (Page): #ffffff
- Button (Accent Green): #00b849
- Button (Accent Orange): #f57200
- Button (Action Blue): #008bf5
- Button Text color: #ffffff

### 3-5 Example Component Prompts
1. Create a `Ghost Button (Pill)` with the text 'Back'. Use Inter font, weight 400, size 16px, color #ffffff, border-color #ffffff, border-width 1px, border-radius 9999px. Padding 8px horizontal, 4px vertical.
2. Render a `Body Text` paragraph: 'It's been 14 years'. Use Inter font, weight 400, size 16px, line-height 1.5, color #757575, normal letter-spacing.
3. Create an `Accent Green Button` with the text 'Queelp'. Use Inter font, weight 400, size 16px, color #ffffff, background-color #00b849, border-radius 9999px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925818669-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925818669-thumb.jpg |
