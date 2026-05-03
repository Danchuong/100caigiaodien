# Guglieri — Refero Style

- Refero URL: https://styles.refero.design/style/5b7ecaf1-de2d-4fb9-9995-9f0665e77862
- Site URL: https://guglieri.com
- ID: 5b7ecaf1-de2d-4fb9-9995-9f0665e77862
- Theme: dark
- Industry: design
- Created: 2026-04-30T03:39:45.821Z
- Ranks: newest: 100, popular: 1185, trending: 1203

> Midnight Terminal, Razor Sharp

## Description

Guglieri.com presents itself as a stark, high-contrast digital canvas for showcasing work. Its visual style is predominantly dark, minimal, and typography-driven, with subtle interactive elements. The design prioritizes clear information hierarchy through careful typographic variations and a constrained color palette of intense blacks and whites, accented by strategic use of fine gray lines and text. Components are kept lightweight, focusing on functionality over decoration, creating an immersive, focused browsing experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Zero | #000000 | neutral | Primary background for pages and sections; also serves as input and link text, and borders for ghost buttons. Its pervasive use establishes the site's dark theme |
| Canvas White | #ffffff | neutral | Main text color for headings and body content, providing sharp contrast against the dark backgrounds. Also used sparingly for button backgrounds |
| Text Gray | #454545 | neutral | Secondary text color for descriptive text and metadata, offering a slightly softer contrast than Canvas White while maintaining readability |
| Input Surface | #111111 | neutral | Background for interactive elements like input fields and button backgrounds, subtly distinct from the primary page background |
| Subtle Surface | #1c1c1c | neutral | Tertiary background color for minor surface variations or less prominent headings, providing a slight elevation from the primary background |
| Hairline Gray | #575757 | neutral | Subtle text and critical border outlines, such as dividers and helper text, acting as a visual separator without adding excessive weight |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Raveo Variable | system-ui, sans-serif | 1000 | 12px, 14px, 22px, 32px, 64px | 1.00, 1.06, 1.18, 1.20, 1.60 | Primary display font for prominent headings. Its extra-bold weight (1000) and distinctive variable features create a strong, almost aggressive visual signature for key messages. The tight letter spacing enhances its impact, making the text feel dense and deliberate. |
| Inter Display | Inter, sans-serif | 400 | 22px | 1.18 | Used for descriptive body text, balancing the intensity of the Raveo Variable headings with a more classic, readable sans-serif. It provides a neutral grounding for longer-form content. |
| Arial | system-ui, sans-serif | 400 | 14px | 1.20 | Utilized for input fields, offering a standard and accessible font choice for user interaction elements. |
| sans-serif | system-ui, sans-serif | 400 | 12px | 1.20 | Default font for various UI elements like navigation links and small labels. It recedes into the background, allowing the stronger typographic choices to dominate. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body-sm | 14 | 1.2 |  |
| body | 22 | 1.18 |  |
| subheading | 32 | 1.2 | -0.64 |
| heading | 64 | 1 | -2.56 |

## Spacing & Shape

```json
{
  "radius": {
    "links": "8px",
    "buttons": "28px",
    "other-ui-elements": "4px",
    "pill-like-elements": "40px"
  },
  "elementGap": "8px",
  "sectionGap": "40px",
  "cardPadding": "40px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link

**Role:** Simple text link

Text in Canvas White (#ffffff) on Absolute Zero (#000000). Radius of 8px for active states or highlighted items. Uses sans-serif at 12px.

### Primary Ghost Button

**Role:** Actionable button with minimal visual hierarchy

Transparent background with an Absolute Zero (#000000) border. Text color is Absolute Zero (#000000). Full rounded pill shape with a 40px radius. Padding is 40px on left/right for ample touch target.

### Secondary Filled Button

**Role:** Actionable button with subtle fill

Filled with Canvas White (#ffffff), text in Absolute Zero (#000000). Half-rounded pill shape with a 28px radius. Padding is 40px on left/right.

### Minimal Input Field

**Role:** Form input field

Transparent background with barely visible border color of Input Surface (#111111). Placeholder and text color is Input Surface (#111111). No explicit radius, appears square. Uses Arial at 14px.

### Description Card

**Role:** Container for secondary information

Implied container on Absolute Zero (#000000) background, with Text Gray (#454545) text. Uses 4px radius as a generic container. Padding of 12px or 16px is common.

## Do's

- Prioritize Absolute Zero (#000000) as the dominant background color to maintain the dark, high-contrast aesthetic.
- Use Canvas White (#ffffff) for all primary headings and body text to ensure sharp readability against dark backgrounds.
- Apply Raveo Variable with its 1000 weight and specified letter spacing for all major headlines to convey strong visual impact.
- Maintain minimal visual hierarchy for buttons, utilizing ghost or subtly filled variants with large border-radii (28px or 40px).
- Employ Text Gray (#454545) or Hairline Gray (#575757) for secondary information, metadata, or subtle dividers to add nuance without compromising contrast.
- Utilize an 8px radius for interactive link elements and navigation items.
- Ensure generous `elementGap` of 8px and `sectionGap` of 40px to create ample breathing room between content blocks.

## Don'ts

- Avoid introducing bright or saturated colors beyond functional accents; the system relies on a monochromatic palette.
- Do not use heavy shadows or multi-layered elevations, as the design philosophy leans towards flat, crisp surfaces.
- Refrain from using lightweight fonts for headings or prominent text; the Raveo Variable 1000 weight is critical for brand recognition.
- Do not deviate from the high-contrast pairing of Canvas White on Absolute Zero for primary content, as it's foundational to the visual identity.
- Avoid complex gradients or patterned backgrounds; keep surfaces clean and solid.
- Do not use generic square buttons or sharply angled corners; button radii should typically be 28px or 40px.
- Do not use Arial outside of input fields; body copy should use Inter Display or a geometric sans-serif substitute.

## Layout

The page operates on a full-bleed model with content centered within implicit vertical divisions, rather than a fixed `pageMaxWidth`. The hero section is full-bleed black with a large, centered Raveo Variable headline and a prominent 3D graphic. Sections are demarcated by consistent vertical spacing, creating distinct information blocks without hard dividers. Content often appears in split layouts with text on one side and a supporting visual element or negative space on the other. A notable pattern is a centered, compact stack for contact information and navigation elements. The overall density is spacious between sections but compact within text blocks. Navigation is a simple, horizontal text menu embedded in the header.

## Imagery

This site uses highly polished 3D rendered graphics of UI elements, specifically computer cursors and app icons, as its primary visual identity. These are tightly cropped, appear against the 'Absolute Zero' background, and utilize subtle reflections and metallic sheens to add depth. Photography is used sparingly, primarily in contextual background shots that are desaturated (grayscale) and serve as atmospheric backdrops rather than focal points. Icons are not emphasized, but when present, they appear as outlined or filled vectors, maintaining UI clarity. The density is text-dominant in informational sections, with hero imagery dominating visual space to showcase core work.

## Similar Brands

| Business | Why |
| --- | --- |
| Bjango | Monochromatic, high-contrast dark mode with strong typography and subtle UI elements. |
| Linear | Emphasis on crisp, clean lines, subtle grays, and a focus on typography within a dark UI. |
| Figma | Similar approach to clean UI, though often lighter, with an emphasis on functional iconography and a modern, compact feel. |
| Relume Library | Systematic use of neutral tones, strong focus on semantic spacing, and modern typographic hierarchy. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- text: #ffffff
- background: #000000
- border: #000000
- accent: no distinct accent color
- primary action: no distinct CTA color

### 3-5 Example Component Prompts
- Create a hero section: Absolute Zero (#000000) background. Headline 'Product Designer' using Raveo Variable, 64px, weight 1000, Canvas White (#ffffff) with letter-spacing -2.56px. Below it, a ghost button 'View Work': transparent background, Absolute Zero (#000000) border, Canvas White (#ffffff) text, 40px radius, 40px horizontal padding, sans-serif 12px.
- Create a navigation bar: Absolute Zero (#000000) background. Links 'About', 'Work', 'Contact' using sans-serif, 12px, Canvas White (#ffffff) text, 8px radius on active states. Element gap 8px between items.
- Create a contact form: Input Surface (#111111) text input fields with a 1px Input Surface (#111111) border, no radius. Placeholder Arial 14px Input Surface (#111111). A "Submit" button, filled with Canvas White (#ffffff), text Absolute Zero (#000000), 28px radius, 40px horizontal padding, Arial 14px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520363868-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520363868-thumb.jpg |
