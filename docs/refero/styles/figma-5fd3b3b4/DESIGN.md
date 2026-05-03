# Figma — Refero Style

- Refero URL: https://styles.refero.design/style/5fd3b3b4-02ab-456a-87aa-e4395636b671
- Site URL: https://www.figma.com
- ID: 5fd3b3b4-02ab-456a-87aa-e4395636b671
- Theme: light
- Industry: design
- Created: 2026-04-29T00:12:54.093Z
- Ranks: newest: 894, popular: 1206, trending: 1232

> digital drafting board

## Description

Figma's design language evokes a sophisticated workspace feel, balancing clean utility with creative vibrancy. Dominant neutral tones provide a calm canvas, allowing strategic pops of vivid color to highlight interactive elements and brand identity. This interplay creates both clarity and engagement, reflecting a tool built for focused work yet enabling imaginative output. Rounded 'pill' buttons and soft shadows on cards suggest approachability within an otherwise crisp, almost systematic aesthetic.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, elevated card surfaces, primary text on dark backgrounds |
| Ink Black | #000000 | neutral | Primary text, icon fills, borders, main navigation text, secondary button backgrounds |
| Figma Gray | #595959 | neutral | Muted body text, secondary text, subtle borders |
| Surface Off-White | #e2e2e2 | neutral | Background for subtle surface distinction, like some card states or section backgrounds |
| Action Violet | #4d49fc | accent | Primary Call-to-Action button fills — a vibrant focus point against the neutral backdrop for interaction |
| Link Blue | #00b6ff | brand | Link backgrounds used as categorical markers, decorative fills in illustrations or brand elements |
| Link Green | #24cb71 | brand | Link backgrounds used as categorical markers, decorative fills in illustrations or brand elements |
| Link Orange | #ff7237 | brand | Link backgrounds used as categorical markers, decorative fills in illustrations or brand elements |
| Figma Green | #e4ff97 | brand | Link backgrounds used as categorical markers |
| Figma Violet | #c4baff | brand | Link backgrounds used as categorical markers |
| Figma Ash | #95b9ac | brand | Link backgrounds used as categorical markers |
| Figma Pink | #cb9fd2 | brand | Link backgrounds used as categorical markers |
| Figma Blush | #ffc9c1 | brand | Link backgrounds used as categorical markers |
| Error Red | #721c1c | brand | Observed in link backgroundColor. |
| Figma Teal | #c7f8fb | brand | Link backgrounds used as categorical markers |
| Gradient Teal Bright | #33dfdf | accent | Component accent borders and text, part of custom conic gradients |
| Gradient Amber | #b98e01 | accent | Component accent borders and text, part of custom conic gradients |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| figmaSans | Inter | 320, 330, 340, 400, 450, 480, 520, 700 | 16px, 18px, 24px, 56px, 72px | 1.00, 1.10, 1.30, 1.35, 1.40, 1.45 | Primary typeface for all UI text, headings, and body content. Its custom design provides a distinct, clean aesthetic. The range of weights allows for a nuanced hierarchy, from light to bold. |
| figmaMono | JetBrains Mono | 400 | 12px, 16px | 1.00, 1.30 | Monospaced typeface used for specific technical contexts or code snippets, maintaining legibility with generous letter-spacing. Its presence nods to developers and technical users. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.3 | 0.6 |
| body-sm | 16 | 1.45 | -0.112 |
| body | 18 | 1.4 | -0.144 |
| heading | 24 | 1.35 | -0.216 |
| heading-lg | 56 | 1.1 | -0.84 |
| display | 72 | 1 | -1.44 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "links": "2px",
    "buttons": "50px",
    "smallButtons": "8px"
  },
  "elementGap": "16px",
  "sectionGap": "24px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Text Button

**Role:** navigation link, secondary action

backgroundColor=rgba(0, 0, 0, 0), color=rgb(0, 0, 0), border-radius=0px, padding=8px. Used for navigation and tertiary actions, blending seamlessly into the background.

### Primary Pill Button

**Role:** primary action

backgroundColor=rgba(77, 73, 252, 1), color=rgb(255, 255, 255), borderRadius=50px, paddingTop=8px, paddingRight=18px, paddingBottom=10px, paddingLeft=18px. Distinctive rounded shape and solid fill make it stand out as the key interactive element.

### Secondary Pill Button (Outlined)

**Role:** secondary action

backgroundColor=rgb(255, 255, 255), color=rgb(0, 0, 0), borderTopColor=rgb(0, 0, 0), borderRadius=50px, paddingTop=8px, paddingRight=18px, paddingBottom=10px, paddingLeft=18px. Offers an alternative call to action with a pill shape and bordered appearance.

### Circular Icon Button (Transparent BG)

**Role:** icon button, subtle interaction

backgroundColor=rgba(0, 0, 0, 0.08), color=rgb(0, 0, 0), borderRadius=50%, padding=0px. Used for subtle, icon-only interactions, typically with a light background tint on hover/active states.

### Circular Icon Button (Ghost White)

**Role:** icon button, subtle interaction on dark BG

backgroundColor=rgba(255, 255, 255, 0.16), color=rgb(255, 255, 255), borderRadius=50%, padding=0px. Icon-only interactions for dark contexts, appearing as a ghost element with a white tint.

### Base Card

**Role:** content container

backgroundColor=rgba(0, 0, 0, 0), borderRadius=0px, boxShadow=none, padding=0px. Used as a structural content block without explicit visual styling beyond its defined space.

### Elevated Marketing Card

**Role:** marketing spotlight, showcase

backgroundColor=rgb(230, 230, 230), borderRadius=18px, boxShadow=rgba(0, 0, 0, 0.1) 0px 24px 70px 0px, padding=0px. Features a pronounced shadow and distinct background, designed to visually pop out from the page.

### Standard Content Card

**Role:** information display, nested content

backgroundColor=rgb(255, 255, 255), borderRadius=16px, boxShadow=none, padding=16px. Clean white background and rounded corners without an explicit shadow, serving as a contained information block.

## Do's

- Use 'Canvas White' (#ffffff) as the primary page background color for a clean, open feel.
- Apply 'Ink Black' (#000000) for all primary text elements to ensure high contrast and readability.
- Reserve 'Action Violet' (#4d49fc) exclusively for primary Call-to-Action button backgrounds to maintain its impact and clear interaction signal.
- Utilize 'Figma Sans' with weight 700 for headings, and 'Figma Sans' weight 400 for body text to establish a clear typographic hierarchy.
- Employ a 'Primary Pill Button' (backgroundColor '#4d49fc', borderRadius '50px') for all main conversions.
- Maintain a comfortable rhythm across sections by using a 'sectionGap' of '24px'.
- Apply a 'cardPadding' of '16px' within content cards to provide adequate breathing room around their content.

## Don'ts

- Do not use 'Action Violet' (#4d49fc) for decorative elements or non-interactive text to avoid diluting its primary action significance.
- Avoid applying strong shadows to elements other than designated 'Elevated Marketing Card' components to preserve visual flatness and focus.
- Do not use letter spacing variations on body text; keep 'figmaSans' body text at its default (normal) tracking for optimal readability.
- Do not introduce sharp corners on buttons; enforce a '50px' borderRadius for 'Primary Pill Button' or '8px' for smaller 'small Buttons'.
- Refrain from using heavily saturated brand colors (e.g., 'Link Blue', 'Link Green') as primary text or background colors; their role is for accents and categorizing links.
- Do not deviate from the established 'comfortable' spacing density; consistently apply a base unit of '4px' to maintain visual rhythm.
- Avoid using the 'figmaMono' font for extensive body passages; its use is specific for technical code-like content, not general reading.

## Layout

The page primarily employs a max-width contained layout for content, centered to create a focused reading experience. The hero section often breaks this containment, presenting full-bleed, dynamic visuals with a prominent, centralized headline overlay. Sections alternate between simple text blocks and more complex arrangements featuring image-left/text-right or vise-versa. Card grids are used for showcasing multiple examples or products, typically in a responsive column layout. There's a consistent vertical rhythm with 'sectionGap' at '24px', suggesting a comfortable density rather than information-heavy blocks, allowing visuals to breathe. A sticky top navigation bar with clear calls to action reinforces persistent brand presence.

## Imagery

The visual language blends product screenshots showcasing complex UI with dynamic, colorful abstract graphics. Product screenshots are typically contained within cards, sometimes overlapping or presented on a slight angle, giving a sense of dynamic motion without being distracting. The abstract graphics utilize vivid, often gradient-infused colors that serve a decorative, atmospheric role, breaking up the otherwise clean UI. Icons are simple, outlined, and monochromatic, used sparingly to support navigation and feature identification. Imagery is used to convey both the 'what' (product UI) and the 'feel' (creative energy).

## Elevation

| Element | Style |
| --- | --- |
| Elevated Marketing Card | rgba(0, 0, 0, 0.1) 0px 24px 70px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Canva | Bright, contrasting accent colors against a clean, mostly white interface, with a focus on approachable design tools. |
| Webflow | Clear separation of content blocks with subtle surface changes, and a strong emphasis on interactive elements guided by brand colors. |
| Notion | Minimalist aesthetic with high contrast text, functional use of color for categorization, and a sophisticated approach to typography. |
| Linear | Clean, almost sparse UI, relying on precise typography and a limited but impactful accent color palette to guide user attention. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #000000
- background: #ffffff
- border: #000000
- accent: #4d49fc
- primary action: #4d49fc (filled action)

Example Component Prompts:
- Create a Primary Action Button: #4d49fc background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
- Design a content card: 'Standard Content Card' with 'Canvas White' background, '16px' border-radius, and '16px' padding. Inside, use 'Ink Black' for titles (24px 'figmaSans' weight 520) and 'Figma Gray' for body text (16px 'figmaSans' weight 400).
- Create a Primary Action Button: #4d49fc background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
- Render an 'Elevated Marketing Card': 'Surface Off-White' background, '18px' border-radius, with the specified shadow (rgba(0, 0, 0, 0.1) 0px 24px 70px 0px).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777421809464-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777421809464-thumb.jpg |
