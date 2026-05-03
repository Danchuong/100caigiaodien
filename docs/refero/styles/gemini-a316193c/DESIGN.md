# GEMINI — Refero Style

- Refero URL: https://styles.refero.design/style/a316193c-6a5f-4a43-96ee-003afdf862ad
- Site URL: https://exp-gemini.lusion.co/motion
- ID: a316193c-6a5f-4a43-96ee-003afdf862ad
- Theme: dark
- Industry: design
- Created: 2026-04-30T02:32:25.747Z
- Ranks: newest: 352, popular: 197, trending: 135

> Holographic display in a void: information gleams from deep shadow.

## Description

GEMINI projects a dark, futuristic aesthetic, emphasizing high-contrast monochrome UI elements against a dramatic, often gradient-infused background that showcases a central 3D rendered object. The design is deliberately spare, with bold, geometric typography acting as sparse, but impactful, information points. Interaction elements are almost entirely ghosted, relying on subtle borders and text color changes to indicate states, reinforcing the impression of a holographic interface rather than tangible physicality. Layouts are open and minimal, directing focus to the central visual showcase.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Void Black | #000000 | neutral | Primary background, deep shadows, essential achromatic fills |
| Polar White | #ffffff | neutral | Primary text color, active states, high-contrast highlights |
| Ghost Border | #efefef | neutral | Subtle borders for phantom buttons, inactive text, and secondary UI elements. It acts as a barely-there structural element against the dark background |
| Silver Mist Gradient | #f2f5f8 | accent | Decorative surface treatment, used for color palette selection or background elements. Its subtly desaturated gradient shifts from light gray to medium gray |
| Sunset Peach Gradient | #dbcbbd | accent | Decorative surface treatment, evoking a warm, inviting glow |
| Crimson Blush Gradient | #c83c43 | accent | Decorative surface treatment, signifying energy and boldness |
| Twilight Orchid Gradient | #c31a65 | accent | Decorative surface treatment, introducing a vibrant, digital-era violet |
| Deep Indigo Gradient | #9b9fc2 | accent | Decorative surface treatment, suggesting depth and calm |
| Ocean Teal Gradient | #20a481 | accent | Decorative surface treatment, providing a cool, stable accent |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Days One | Bebas Neue | 400 | 10px, 17px | 1.00, 1.20 | Primary brand typography for logos, badging, and distinctive labels. Its geometric, blocky letterforms convey a modern, technical feel. |
| Zen Dots | DotGothic16 | 400 | 17px | 1.20 | Main navigation and interactive text. Its unique, stylized dots within the letters provide a subtle futuristic touch. |
| Exo 2 | Exo 2 | 400, 500 | 11px, 12px | 1.69, 2.50 | Heading and supportive text. The varied weights and deliberate, wide letter spacing allow for nuanced emphasis without resorting to large sizes, maintaining a compact yet readable informational presence. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "default": "3px"
  },
  "elementGap": "5px",
  "sectionGap": "50px",
  "cardPadding": "10px",
  "pageMaxWidth": null
}
```

## Components

### Nav Menu Item (Ghost)

**Role:** Interactive element

Ghosted text link using Zen Dots font at 17px, Polar White (#ffffff), with no background or border, minimal padding of 12px. The text subtly changes state on hover.

### Branded Header Logo

**Role:** Brand identification

The brand's name 'LUSION: LABS' rendered in Days One font, 17px, Polar White (#ffffff), appearing top-left. It maintains a subtle presence without dominating the visual field.

### Badge (Text Only)

**Role:** Categorization/Labeling

A text-only badge using Days One font at 10px, Ghost Border (#efefef) color. No explicit background or border, with visual separation achieved through minimal content spacing like 10px bottom margin or 10px top/bottom padding.

### Color Swatch Selector

**Role:** Color palette interaction

Small, square gradients (3px radius) representing different color moods. They are interactive UI elements that change the visual state of the main content.

## Do's

- Use Void Black (#000000) as the foundational background for all primary content areas.
- Employ Ghost Border (#efefef) for all inactive text, subtle borders, and secondary UI elements, creating a sense of translucency.
- Apply Days One font (400 weight, 17px) for all prominent brand marks and labels.
- Utilize Zen Dots font (400 weight, 17px) for primary navigation items and interactive text, establishing a distinct digital-era feel.
- Maintain minimal spacing for interactive elements, using `elementGap` of 5px and small padding like 10px where necessary, to keep the layout compact.
- Round corners with a 3px radius on all small interactive elements and containers where subtle differentiation is needed.
- Incorporate the gradient color tokens sparingly, primarily as decorative accents or visual selection tools, never as primary UI backgrounds.

## Don'ts

- Avoid using saturated solid colors for primary interface elements; instead, rely on monochrome tones and subtle gradients.
- Do not introduce strong drop shadows or complex elevation; surfaces should appear flat or subtly layered, contributing to the holographic feel.
- Refrain from using bold type weights excessively; the design favors lighter weights and careful letter spacing to convey hierarchy.
- Do not use generic system fonts; custom fonts Days One and Zen Dots are key to brand identity.
- Avoid dense, information-heavy layouts; prioritize spaciousness and singular focal points.
- Do not use highly opaque backgrounds for interactive elements; transparency and ghosting are preferred.
- Do not break the compact density with large, arbitrary spacing values; adhere to the established elementGap and padding guidelines.

## Layout

The page primarily uses a full-bleed layout where the background and main visual content extend to the edges of the viewport. The hero section is dominated by the 3D rendered object, centered against a gradient background. Navigation elements (logo, menu items) are placed in the top corners, maintaining a minimalist, high-tech control panel aesthetic. Content beyond the hero appears in a similarly sparse manner, with text badges or labels placed strategically to complement the visual display. There is no traditional grid for content; elements are placed with a sense of deliberate emptiness, directing the eye toward the central visual.

## Imagery

This site features a single, dominant 3D rendered product (a concept car) centrally positioned. The rendering is sophisticated, with realistic textures and lighting, and is the primary visual focus. There are no secondary images, illustrations, or photography. The entire background is often a full-bleed, soft color gradient, creating an ethereal and atmospheric backdrop that frames the central object. Imagery is the content, not a decorative addition, and is often interactive (e.g., color selection for the car). Icons are minimal, represented by simple geometric shapes like a hollow square.

## Similar Brands

| Business | Why |
| --- | --- |
| Polestar | Monochromatic, dark mode interface focusing on a single product with understated, technical typography. |
| Cyberpunk 2077 (UI) | Utilizes minimalist, high-contrast UI elements and bold geometric fonts against dark, atmospheric backgrounds consistent with a futuristic theme. |
| Lamborghini Configurator | Centered 3D rendered object as the hero, with sparse UI elements and color selectors that influence the main visual. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #efefef
accent: #f2f5f8 (silver mist gradient start)
primary action: no distinct CTA color

Example Component Prompts:
1. Create a header with 'LUSION: LABS' on the left and 'ABOUT' on the right. 'LUSION: LABS' should use Days One font, 400 weight, 17px, Polar White (#ffffff). 'ABOUT' should use Zen Dots font, 400 weight, 17px, Polar White (#ffffff) and have a 2px horizontal border of Ghost Border (#efefef) with a 3px radius around it.
2. Design a badge labeled 'IN MOTION VIEW' using Days One font, 400 weight, 10px, Ghost Border (#efefef). No background, no visible border, with 10px bottom margin (if part of a list).
3. Create a color swatch selector. This should be a small square (e.g., 30x30px) with a 3px border-radius, filled with the 'Ocean Teal Gradient' starting with #20a481, against a Void Black (#000000) background. Ensure an active state, e.g. a 1px border of #efefef when selected.
4. Produce a general heading text 'IN STYLE' using Exo 2 font, 500 weight, 12px, Polar White (#ffffff), with letter spacing of 0.2850em. The heading should appear almost translucent (e.g., opacity 0.7) against the dark background.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516300191-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516300191-thumb.jpg |
